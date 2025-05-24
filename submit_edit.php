<?php
session_start();
require_once(__DIR__ . '/src/Database.php');
require_once(__DIR__ . '/src/CommentManager.php');

use core\Database;
use core\CommentManager;

if (!isset($_SESSION['user']) || $_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$db = new Database('contact');
$conn = $db->getConnection();
$manager = new CommentManager($conn);

$id = $_POST['id'] ?? null;
$newComment = $_POST['comment'] ?? '';

if ($id && $newComment) {
    $manager->updateComment($id, $newComment, $_SESSION['user']);
}

header('Location: categories.php');
exit;
