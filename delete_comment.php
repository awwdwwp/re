<?php
session_start();
require_once(__DIR__ . '/src/Database.php');
require_once(__DIR__ . '/src/CommentManager.php');

use core\Database;
use core\CommentManager;

if (!isset($_SESSION['user']) || $_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['comment_id'])) {
    header('Location: login.php');
    exit;
}

$db = new Database('contact');
$conn = $db->getConnection();
$manager = new CommentManager($conn);

$commentId = $_POST['comment_id'];
$manager->deleteComment($commentId, $_SESSION['user']);

header('Location: categories.php');
exit;