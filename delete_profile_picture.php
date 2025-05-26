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


$stmt = $conn->prepare("SELECT profile_picture FROM users WHERE id = ?");
$stmt->execute([$userId]);
$current = $stmt->fetchColumn();


if ($current && $current !== 'default.png') {
    $path = __DIR__ . "/img/avatars/" . $current;
    if (file_exists($path)) {
        unlink($path);
    }
}

$stmt = $conn->prepare("UPDATE users SET profile_picture = ? WHERE id = ?");
$stmt->execute(['default.png', $userId]);
$_SESSION['user']['profile_picture'] = 'default.png';

header('Location: profile.php');
exit;