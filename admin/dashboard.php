<?php namespace html;

use Database;

require_once "lock.php";
require_once "../includes/render.php";
require_once "../includes/config.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="icon" href="../assets/images/icons/favicon.png" type="image/x-icon">
    <title>Dashboard | Admin</title>
</head>
<body class="bg-light">
<main>
    <?php echo imageOverlay("../assets/images/backgrounds/coffee.jpg", "DASHBOARD") ?>
    <div class="container mt-3">
        <?php
        if (isset($_SESSION["delete_message"])) {
            echo alert($_SESSION["delete_message"]);
            unset($_SESSION["delete_message"]);
        }
        if (isset($_SESSION["insert_message"])) {
            echo alert($_SESSION["insert_message"]);
            unset($_SESSION["insert_message"]);
        }
        ?>
        <hr>
        <section>
            <h2 class="mt-3">Add New Product</h2>
            <form action="actions/add_product.php" method="post" class="p-3 rounded">
                <div class="form-group">
                    <label for="insert_name">Name:</label>
                    <input type="text" class="form-control" id="insert_name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="insert_description">Description:</label>
                    <textarea class="form-control" id="insert_description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="insert_price">Price:</label>
                    <input type="number" step="0.01" class="form-control" id="insert_price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="insert_imageURL">Image URL: [e.g. 'images/coffee/name.jpg']</label>
                    <input type="text" class="form-control" id="insert_imageURL" name="image-url" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Coffee</button>
                </div>
            </form>
        </section>
        <hr>
        <section>
            <h2 class="mt-3">Delete Product</h2>
            <form action="actions/remove_product.php" method="post" class="p-3 rounded">
                <div class="form-group">
                    <label for="delete_name">Coffee Name:</label>
                    <input type="text" class="form-control" id="delete_name" name="name" required>
                </div>
                <button type="submit" class="btn btn-danger">Delete Coffee</button>
            </form>
        </section>
        <hr>
        <section>
            <h2 class="mt-3">Latest Messages</h2>
            <ul class="list-group">
                <?php
                $result = Database::getInstance()->getAllMessages();
                while ($row = $result->fetch_object()) {
                    echo <<<ITEM
                <li class="list-group-item">
                    MESSAGE: $row->message - NAME: $row->first_name $row->last_name - $row->email - CREATED AT: $row->created_at
                </li>
                ITEM;
                }
                ?>
            </ul>
        </section>
        <hr>
        <div class="d-flex justify-content-between">
            <form action="actions/authenticate.php" method="post">
                <input type="hidden" name="logout" value="true">
                <button type="submit" class="btn btn-warning">Logout</button>
            </form>
        </div>
        <hr>
    </div>
</main>
</body>
</html>
