<?php
session_start();

require_once "../includes/config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit;
}

if (Database::getInstance()->createMessage(
    $_POST["first-name"],
    $_POST["last-name"],
    $_POST["email"],
    $_POST["message"]
)) {
    $_SESSION["message_created_message"] = "Your message has been sent successfully!";
} else {
    $_SESSION["message_created_message"] = "Message could not be created!";
}

header("Location: ../contact");
exit;
