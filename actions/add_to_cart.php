<?php
session_start();

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit;
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

$_SESSION["cart"][$id][$size]["quantity"]++;
$_SESSION["item_added_message"] = "Item added to cart successfully!";

header("Location: ../menu");
exit;
