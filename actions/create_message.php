<?php
session_start();

require_once "../includes/config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit;
}

Database::getInstance()->createMessage(
    $_POST["first-name"],
    $_POST["last-name"],
    $_POST["email"],
    $_POST["message"]
);

$_SESSION["message_created_message"] = "Your message has been sent successfully!";

header("Location: ../contact");
exit;
