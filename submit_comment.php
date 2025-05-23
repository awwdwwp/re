<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require_once(__DIR__ . '/db/config.php');
require_once(__DIR__ . '/src/Database.php');

use core\Database;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['user']['id'];
    $image = trim($_POST['image']);
    $comment = trim($_POST['comment']);

    if ($image === '' || $comment === '') {
        die("Invalid data.");
    }

    $db = new Database('contact');
    $conn = $db->getConnection();

    $stmt = $conn->prepare("INSERT INTO comments (user_id, image_name, comment) VALUES (?, ?, ?)");
    $stmt->execute([$userId, $image, $comment]);

    header("Location: gallery.php"); // Or wherever your gallery page is
    exit;
} else {
    echo "Invalid request.";
}