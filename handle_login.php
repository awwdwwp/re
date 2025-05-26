<?php
session_start();

require_once(__DIR__ . '/db/config.php');
require_once(__DIR__ . '/src/Database.php');
require_once(__DIR__ . '/src/User.php');

use auth\User;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $user = new User();
    $authenticatedUser = $user->login($email, $password);

    if ($authenticatedUser) {
        $_SESSION['user'] = [
            'id' => $authenticatedUser['id'],
            'name' => $authenticatedUser['name'],
            'email' => $authenticatedUser['email'],
            'role' => $authenticatedUser['role'],
            'profile_picture' => $authenticatedUser['profile_picture'] ?? 'default.png'
        ];
        header('Location: index.php'); 
        exit;
    } else {
        echo "Login failed. Invalid email or password.";
    }
} else {
    echo "Invalid request.";
}