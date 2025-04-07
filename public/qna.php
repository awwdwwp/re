<?php
if (!defined('__ROOT__')) {
    define('__ROOT__', dirname(dirname(__FILE__)));
}
require_once(__ROOT__ . '/src/QnA.php');

use otazkyodpovede\QnA;

$qna = new QnA();
$qna->insertQnA();
$questionsAndAnswers = $qna->getQnA();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
echo "<pre>";
print_r($questionsAndAnswers);
echo "</pre>";
if (empty($questionsAndAnswers)) {
    echo "No questions and answers found.";
} else {
    echo "<div class='qna-list'>";
    foreach ($questionsAndAnswers as $qnaItem) {
        echo "<div class='qna-item'>";
        echo "<h3>" . htmlspecialchars($qnaItem['otazka']) . "</h3>"; // Output the question
        echo "<p>" . htmlspecialchars($qnaItem['odpoved']) . "</p>"; // Output the answer
        echo "</div>";
    }
    echo "</div>";
} ?>
</body>
</html>