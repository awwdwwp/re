<?php namespace otazkyodpovede;

if (!defined('__ROOT__')) {
    define('__ROOT__', dirname(dirname(__FILE__)));
}
require_once(__ROOT__ . '/db/config.php');
use PDO;

class QnA {
    private $conn;
    public function __construct() {
        $this->connect();
    }

    private function connect() {
        $config = DATABASE;
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        );
    
        try {
            $this->conn = new PDO('mysql:host=' . $config['HOST'] . ';dbname=' . $config['DBNAME'] . ';port=' . $config['PORT'], $config['USER_NAME'], $config['PASSWORD'], $options);
            //echo "Connection established.<br>";
        } catch (PDOException $e) {
            die("Connection error: " . $e->getMessage());
        }
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
            //echo "Data was inserted successfully!";
        } catch (Exception $e) {  
            echo "Error while inserting data: " . $e->getMessage();
            $this->conn->rollback(); 
        } finally {
            $this->conn = null;  
        }
    }

    public function getQnA() {
        try {
            if ($this->conn === null) {
                $this->connect();
            }
    
            $sql = "SELECT * FROM qna";
            $statement = $this->conn->prepare($sql);
            $statement->execute();
            $questionsAndAnswers = $statement->fetchAll(PDO::FETCH_ASSOC);
    
            return $questionsAndAnswers;
        } catch (\Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }
}
?>