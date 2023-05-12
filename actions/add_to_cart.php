<?php
session_start();

header("Content-Type: application/json");

try {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        throw new Exception("Invalid request method");
    }

    if (!isset($_POST["id"]) || !isset($_POST["size"]) || !isset($_POST["quantity-change"])) {
        throw new Exception("Missing parameters");
    }

    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }

    $id = $_POST["id"];
    $size = $_POST["size"];

    if (!isset($_SESSION["cart"][$id])) {
        $_SESSION["cart"][$id] = array();
    }

    if (!isset($_SESSION["cart"][$id][$size])) {
        $_SESSION["cart"][$id][$size] = array(
            "quantity" => 0
        );
    }

    $_SESSION["cart"][$id][$size]["quantity"] += $_POST["quantity-change"];

    echo json_encode(array(
        "success" => true
    ));
    exit;

} catch (Exception $e) {
    echo json_encode([
        "success" => false,
        "message" => $e->getMessage()
    ]);
}
exit;
