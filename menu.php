<?php namespace html;

require_once "includes/component.php";
require_once "includes/config.php";

use Database;

$query = "select * from coffee";
$result = Database::getConnection()->query($query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <title>Menu | Cuppa Joy</title>
</head>
<body>
<header>
    <?php renderNavbar() ?>
</header>
<main>
    <div class="content-wrapper">
        <h2>Our Menu</h2>
        <div class="menu-items">
            <?php
            // Generate all coffee figures from the database:
            for ($i = 0; $i < $result->num_rows; $i++) {
                $row = $result->fetch_object();
                echo createCard($row->image_url, $row->name, $row->description);
            }
            ?>
        </div>
    </div>
</main>
<?php renderFooter() ?>
</body>
</html>
<?php

function createCard($image_url, $name, $description): string {
    return <<<CARD
        <div class="card menu-item">
            <img class="card-img-top" src="assets/$image_url" alt="$name">
            <div class="card-body">
                <h3 class="card-title">$name</h3>
                <p class="card-text">$description</p>
            </div>
        </div>
    CARD;
}

?>
