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
    <section class="mb-5">
        <?php echo imageOverlay("assets/images/backgrounds/table.jpg", "MENU"); ?>
        <hr>
        <div class="text-box text-center">
            <p class="font-bigger">
                Discover our amazing coffee selection, carefully crafted to satisfy your taste buds.</p>
        </div>
        <hr>
    </section>
    <section class="content-wrapper">
        <div class="menu-items menu-grid">
            <?php
            // Generate all coffee figures from the database:
            for ($i = 0; $i < $result->num_rows; $i++) {
                $row = $result->fetch_object();
                echo createCard($row->image_url, $row->name, $row->price, $row->description);
            }
            ?>
        </div>
    </section>
</main>
<?php renderFooter() ?>
</body>
</html>
<?php

function createCard($image_url, $name, $price, $description): string {
    return <<<CARD
        <div class="card menu-item">
            <img class="card-img-top" src="assets/$image_url" alt="$name">
            <div class="card-header font-glow">
                <h3 class="card-title text-center font-fancy">$name</h3>
            </div>
            <div class="card-body">
                <p class="card-text">$description</p>
            </div>
            <div class="card-footer">
                <div class="d-flex">
                    <p class="mx-auto font-bold">$price ILS</p>
                    <button type="button" class="mx-auto btn btn-outline-dark">ADD TO CART</button>
                </div>
            </div>
        </div>
    CARD;
}

?>
