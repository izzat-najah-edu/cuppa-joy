<?php
require_once "../lock.php";
require_once "../../includes/config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../index.php");
    exit;
}

if (!isset($_POST["name"]) ||
    !Database::getInstance()->deleteCoffee($_POST["name"])) {
    $_SESSION["delete_message"] = "Invalid product name!";
} else {
    $_SESSION["delete_message"] = "Product [{$_POST['name']}] has been deleted successfully!";
}

header("Location: ../dashboard.php");
exit;
