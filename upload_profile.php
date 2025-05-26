<?php
session_start();
require_once(__DIR__ . '/src/Database.php');

use core\Database;

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$db = new Database('contact');
$conn = $db->getConnection();

$userId = $_SESSION['user']['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['profile_picture'])) {
    $file = $_FILES['profile_picture'];
    if (empty($file['name'])) {
    // If user uploaded nothing, just set default
    $stmt = $conn->prepare("UPDATE users SET profile_picture = ? WHERE id = ?");
    $stmt->execute(['default.png', $userId]);
    $_SESSION['user']['profile_picture'] = 'default.png';
    header('Location: profile.php');
    exit;
}
    $allowed = ['image/jpeg', 'image/png', 'image/webp'];

    if (in_array($file['type'], $allowed) && $file['size'] < 2 * 1024 * 1024) {
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $newName = "user_" . $userId . "." . $ext;
        $target = __DIR__ . "/img/avatars/" . $newName;

        if (!is_dir(__DIR__ . "/img/avatars")) {
            mkdir(__DIR__ . "/img/avatars", 0777, true);
        }

        if (move_uploaded_file($file['tmp_name'], $target)) {
            // Save filename in DB
            $stmt = $conn->prepare("UPDATE users SET profile_picture = ? WHERE id = ?");
            $stmt->execute([$newName, $userId]);

            // Update session
            $_SESSION['user']['profile_picture'] = $newName;

            header('Location: profile.php');
            exit;
        } else {
            echo "Failed to move file.";
        }
    } else {
        echo "Invalid file type or size too large (max 2MB).";
    }
}
?>