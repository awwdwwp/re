<?php
namespace otazkyodpovede;

if (!defined('__ROOT__')) {
    define('__ROOT__', dirname(dirname(__FILE__)));
}
require_once(__ROOT__ . '/db/config.php');
require_once(__ROOT__ . '/src/Database.php');

use core\Database;
use PDO;

class QnA {
    private $conn;

    public function __construct() {
        $this->conn = (new Database('qna'))->getConnection();
    }

    public function insertQnA() {
        try {
            $data = json_decode(file_get_contents(__ROOT__ . '/data/data.json'), true);
            $questions = $data["otazky"];
            $answers = $data["odpovede"];

            $this->conn->beginTransaction();

            $sql = "INSERT INTO qna (otazka, odpoved)
                    SELECT * FROM (SELECT :otazka AS otazka, :odpoved AS odpoved) AS tmp
                    WHERE NOT EXISTS (
                        SELECT 1 FROM qna WHERE otazka = :otazka
                    )";

            $statement = $this->conn->prepare($sql);

            for ($i = 0; $i < count($questions); $i++) {
                $statement->bindParam(':otazka', $questions[$i]);
                $statement->bindParam(':odpoved', $answers[$i]);
                $statement->execute();
            }

            $this->conn->commit();
        } catch (\Exception $e) {
            echo "Error while inserting data: " . $e->getMessage();
            $this->conn->rollback();
        }
    }

    public function getQnA() {
        try {
            $sql = "SELECT * FROM qna";
            $statement = $this->conn->prepare($sql);
            $statement->execute();
            return $statement->fetchAll();
        } catch (\Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }
}