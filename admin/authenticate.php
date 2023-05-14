<?php
session_start();

require_once "../includes/config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: login");
    exit;
}

if (!isset($_POST["username"]) || !isset($_POST["password"])) {
    header("Location: login");
    exit;
}

$loggedIn = Database::getInstance()->login($_POST["username"], $_POST["password"]);
if (!$loggedIn) {
    header("Location: login");
    exit;
}

$_SESSION["logged"] = true;
header("Location: dashboard");
exit;
