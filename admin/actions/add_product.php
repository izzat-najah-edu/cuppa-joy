<?php
require_once "../lock.php";
require_once "../../includes/config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../index.php");
    exit;
}

if (!isset($_POST["name"]) ||
    !isset($_POST["description"]) ||
    !isset($_POST["price"]) ||
    !isset($_POST["image-url"]) ||
    !isset($_POST["name-arabic"]) ||
    !isset($_POST["description-arabic"]) ||
    !Database::getInstance()->insertCoffee(
        $_POST["name"],
        $_POST["description"],
        $_POST["price"],
        $_POST["image-url"])) {
    $_SESSION["insert_message"] = "Invalid product information!";
} else {
    $_SESSION["insert_message"] = "Product [{$_POST['name']}] has been created successfully!";
}

header("Location: ../dashboard.php");
exit;
