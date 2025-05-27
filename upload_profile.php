<?php
session_start();

require_once(__DIR__ . '/src/Database.php');
require_once(__DIR__ . '/src/ProfileManager.php');

use core\Database;
use core\ProfileManager;

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$db = new Database('contact');
$conn = $db->getConnection();
$profileManager = new ProfileManager($conn);

$userId = $_SESSION['user']['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['profile_picture'])) {
    $file = $_FILES['profile_picture'];

    if (empty($file['name'])) {
        $profileManager->updateProfilePicture($userId, 'default.png');
        $_SESSION['user']['profile_picture'] = 'default.png';
        header('Location: profile.php');
        exit;
    }

    $allowed = ['image/jpeg', 'image/png', 'image/webp'];

    if (in_array($file['type'], $allowed) && $file['size'] < 2 * 1024 * 1024) {
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $newName = "user_" . $userId . "." . $ext;
        $target = $profileManager->getAvatarPath($newName);


        $avatarDir = dirname($target);
        if (!is_dir($avatarDir)) {
            mkdir($avatarDir, 0777, true);
        }

        if (move_uploaded_file($file['tmp_name'], $target)) {
            $profileManager->updateProfilePicture($userId, $newName);
            $_SESSION['user']['profile_picture'] = $newName;

            header('Location: profile.php');
            exit;
        } else {
            echo "Failed to move uploaded file.";
        }
    } else {
        echo "Invalid file type or file size too large (max 2MB).";
    }
}