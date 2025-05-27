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

if ($profileManager->deleteProfilePicture($userId)) {
    $_SESSION['user']['profile_picture'] = 'default.png';
}

header('Location: profile.php');
exit;