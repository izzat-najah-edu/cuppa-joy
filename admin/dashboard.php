<?php namespace html;

require_once "lock.php";
require_once "../includes/render.php";
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
        <hr>
        <section>
            <h2 class="mt-3">Add New Product</h2>
            <form action="actions/add_product.php" method="post" class="p-3 rounded">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="image_url">Image URL:</label>
                    <input type="text" class="form-control" id="image_url" name="image_url">
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
                    <label for="delete_id">Coffee Name:</label>
                    <input type="text" class="form-control" id="delete_id" name="name" required>
                </div>
                <button type="submit" class="btn btn-danger">Delete Coffee</button>
            </form>
        </section>
        <hr>
        <section>
            <h2 class="mt-3">Latest Messages</h2>
            <ul class="list-group">
                <?php
                // Query the database for the latest messages and display them
                // $result = $connection->query("SELECT * FROM messages ORDER BY created_at DESC LIMIT 10");
                // while ($row = $result->fetch_assoc()) {
                //     echo "<li class=\"list-group-item\">" . htmlspecialchars($row['message']) . " - " . htmlspecialchars($row['first_name']) . " " . htmlspecialchars($row['last_name']) . "</li>";
                // }
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
