<?php
session_start();

use core\Database;
use core\ProfileManager;

require_once __DIR__ . '/db/config.php';
require_once __DIR__ . '/src/Database.php';
require_once __DIR__ . '/src/ProfileManager.php';

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nickname'])) {
    $db = new Database('contact');
    $conn = $db->getConnection();
    $profileManager = new ProfileManager($conn);

    $newName = trim($_POST['nickname']);
    $profileManager->updateNickname($_SESSION['user']['id'], $newName);

    
    $user = $profileManager->getUserById($_SESSION['user']['id']);
    if ($user) {
        $_SESSION['user'] = $user;
    }

    header('Location: profile.php');
    exit;
}
?>