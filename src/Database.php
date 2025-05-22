<?php
namespace core;

if (!defined('__ROOT__')) {
    define('__ROOT__', dirname(dirname(__FILE__)));
}

require_once(__ROOT__ . '/db/config.php');
use PDO;

class Database {
    protected $conn;

    public function __construct(string $dbKey) {
        $this->connect($dbKey);
    }

    private function connect(string $dbKey): void {
        $configs = DATABASES;

        if (!isset($configs[$dbKey])) {
            die("Database configuration for '$dbKey' not found.");
        }

        $config = $configs[$dbKey];
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        try {
            $this->conn = new PDO(
                "mysql:host={$config['HOST']};dbname={$config['DBNAME']};port={$config['PORT']}",
                $config['USER_NAME'],
                $config['PASSWORD'],
                $options
            );
        } catch (\PDOException $e) {
            die("Connection error to '$dbKey': " . $e->getMessage());
        }
    }

    public function getConnection(): PDO {
        return $this->conn;
    }
}