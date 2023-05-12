<?php
session_start();

header("Content-Type: application/json");

try {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        throw new Exception("Invalid request method");
    }

    if (!isset($_POST["id"]) || !isset($_POST["size"])) {
        throw new Exception("Missing parameters");
    }

    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }

    $id = $_POST["id"];
    $size = $_POST["size"];

    if (isset($_SESSION["cart"][$id][$size])) {
        unset($_SESSION["cart"][$id][$size]);
    }

    echo json_encode([
        "success" => true
    ]);
    exit;

} catch (Exception $e) {
    echo json_encode([
        "success" => false,
        "message" => $e->getMessage()
    ]);
}
exit;
