<?php

require_once "../includes/config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode([
        "success" => false,
        "message" => "Invalid request method"
    ]);
    exit;
}

try {
    Database::getInstance()->subscribeEmail($_POST["email"]);
} catch (Exception $ignored) {
}

echo json_encode([
    "success" => true
]);
exit;
