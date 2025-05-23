<?php
if (!defined('__ROOT__')) {
    define('__ROOT__', dirname(__FILE__));
}
require_once(__ROOT__ . '/src/Contact.php');

use kontakty\Contact;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name && $email && $message) {
        $contact = new Contact();
        $contact->saveMessage($name, $email, $message);
        header("Location: thank_you.php"); 
        exit;
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Invalid request.";
}