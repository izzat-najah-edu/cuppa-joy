<?php namespace html;

require_once "includes/component.php";
require_once "includes/config.php";

use Database;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
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

    echo json_encode(array(
            "success" => true,
            "id" => $id,
            "size" => $size,
            "quantity" => $_SESSION["cart"][$id][$size]["quantity"])
    );
}
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
    <div id="alertPlaceholder">

    </div>
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
            $query = "select * from coffee";
            $result = Database::getConnection()->query($query);
            for ($i = 0; $i < $result->num_rows; $i++) {
                $row = $result->fetch_object();
                echo menuItem($row->id, $row->image_url, $row->name, $row->price, $row->description);
            }
            ?>
        </div>
    </section>
</main>
<?php renderFooter() ?>
</body>
</html>
<?php

function menuItem($id, $image_url, $name, $price, $description): string {
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
                    <div class="mx-auto">
                        <p class="font-bold text-decoration">$price ILS</p>
                    </div>
                    <form action="menu.php" method="post">
                        <input type="hidden" name="id" value="$id">
                        <div class="dropdown mx-auto">
                            <ul class="dropdown-menu">
                                <li><label class="dropdown-item"><input type="submit" name="size" value="s" style="display:none;">SMALL</label></li>
                                <li><label class="dropdown-item"><input type="submit" name="size" value="m" style="display:none;">MEDIUM</label></li>
                                <li><label class="dropdown-item"><input type="submit" name="size" value="l" style="display:none;">LARGE</label></li>
                            </ul>
                            <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown">
                                ADD TO CART
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    CARD;
}

?>
