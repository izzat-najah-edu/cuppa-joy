<?php
session_start();

header("Content-Type: application/json");

require_once "../includes/config.php";

try {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        throw new Exception("Invalid request method");
    }

    if (!isset($_POST["first-name"])
        || !isset($_POST["last-name"])
        || !isset($_POST["email"])
        || !isset($_POST["message"])) {
        throw new Exception("Missing parameters");
    }

    $success = Database::getInstance()->createMessage(
        $_POST["first-name"],
        $_POST["last-name"],
        $_POST["email"],
        $_POST["message"]
    );

    if (!$success) {
        throw new Exception("Message could not be created!");
    }

    echo json_encode(array(
        "success" => true,
    ));

} catch (Exception $e) {
    echo json_encode([
        "success" => false,
        "message" => $e->getMessage()
    ]);
}
exit;
