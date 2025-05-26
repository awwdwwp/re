<?php
session_start();
require_once __DIR__ . '/src/Database.php';

use core\Database;

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
    header('Location: index.php');
    exit;
}

$db = new Database('contact');
$conn = $db->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['message']) && !empty($_POST['user_id'])) {
    $stmt = $conn->prepare("INSERT INTO notifications (user_id, message) VALUES (?, ?)");
    $stmt->execute([$_POST['user_id'], $_POST['message']]);
    $success = 1;
}
header("Location: admin_users.php?success=1");
    exit;
?>

