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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/qna.css"/>
</head>
<body>
    
    <div class="qna-container">
    
        <h1 class="text-center">Questions and Answers</h1>
        <?php if (empty($questionsAndAnswers)): ?>
            <p>No questions and answers found.</p>
        <?php else: ?>
            <div class="qna-list">
                <?php foreach ($questionsAndAnswers as $qnaItem): ?>
                    <div class="qna-item">
                        <h3><?= htmlspecialchars($qnaItem['otazka']) ?></h3>
                        <p><?= htmlspecialchars($qnaItem['odpoved']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div class="back-button-wrapper">
            <a href="../contact.php" class="back-button">← Go Back</a>
        </div>
    </div>
    <?php include '../parts/footer.html'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>