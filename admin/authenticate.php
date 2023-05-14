<?php
session_start();

require_once "../includes/config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index");
    exit;
}

if (isset($_POST["logout"]) && $_POST["logout"]) {
    unset($_SESSION["logged"]);
    header("Location: index");
    exit;
}

if (!isset($_POST["username"]) || !isset($_POST["password"])) {
    header("Location: index");
    exit;
}

$loggedIn = Database::getInstance()->login($_POST["username"], $_POST["password"]);
if (!$loggedIn) {
    header("Location: index");
    exit;
}

$_SESSION["logged"] = true;
header("Location: dashboard");
exit;
