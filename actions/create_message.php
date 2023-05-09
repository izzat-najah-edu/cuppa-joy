<?php
session_start();

require_once "../includes/config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit;
}

try {
    Database::getInstance()->createMessage(
        $_POST["first-name"],
        $_POST["last-name"],
        $_POST["email"],
        $_POST["message"]
    );
    $_SESSION["message_created_message"] = "Your message has been sent successfully!";
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

header("Location: ../contact");
exit;
