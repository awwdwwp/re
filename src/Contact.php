<?php
namespace kontakty;

if (!defined('__ROOT__')) {
    define('__ROOT__', dirname(dirname(__FILE__)));
}
require_once(__ROOT__ . '/db/config.php');
require_once(__ROOT__ . '/src/Database.php');

use core\Database;
use PDO;

class Contact {
    private $conn;

    public function __construct() {
        $this->conn = (new Database('contact'))->getConnection();
    }

    public function saveMessage($name, $email, $message) {
        try {
            $sql = "INSERT INTO messages (name, email, message, created_at) 
                    VALUES (:name, :email, :message, NOW())";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':message' => $message
            ]);
        } catch (\Exception $e) {
            die("Error saving message: " . $e->getMessage());
        }
    }
}