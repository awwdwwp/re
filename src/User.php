<?php
namespace auth;

use core\Database;
use PDO;

class User {
    private $conn;

    public function __construct() {
        $this->conn = (new Database('contact'))->getConnection();
    }

    public function register($name, $email, $password) {
    try {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->conn->prepare("INSERT INTO users (name, email, password_hash) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $email, $hashedPassword]);
    } catch (\PDOException $e) {
        return false;
    }
}

    public function login($email, $password) {
        try {
            $stmt = $this->conn->prepare("SELECT id, name, email, password_hash, profile_picture, role FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password_hash'])) {
                return $user;
            }
            return false;
        } catch (\PDOException $e) {
            return false;
        }
    }
}

?>