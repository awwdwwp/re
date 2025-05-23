<?php
require_once(__DIR__ . '/db/config.php');
require_once(__DIR__ . '/src/Database.php');
require_once(__DIR__ . '/src/User.php');

use auth\User;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $user = new User();
    $success = $user->register($name, $email, $password);

    if ($success) {
        header('Location: register_success.php');
        exit;
    } else {
        echo "Registration failed. Maybe the email is already taken.";
    }
} else {
    echo "Invalid request.";
}