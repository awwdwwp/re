<?php
session_start();
require_once(__DIR__ . '/src/Database.php');
require_once(__DIR__ . '/src/Comment.php');
require_once(__DIR__ . '/src/CommentManager.php');

use core\Database;
use core\Comment;
use core\CommentManager;

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['comment']) && !empty($_POST['image'])) {
    $db = new Database('contact');
    $conn = $db->getConnection();
    $manager = new CommentManager($conn);

    $comment = new Comment(
        $_POST['comment'],
        $_SESSION['user']['id'],
        $_SESSION['user']['name'],
        $_POST['image']
    );

    $manager->addComment($comment);
}

header('Location: categories.php');
exit;