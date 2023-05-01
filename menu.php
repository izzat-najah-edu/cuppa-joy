<?php
require_once "includes/header.php";
require_once "includes/footer.php";
require_once "includes/config.php";

use html\Header;
use html\Footer;

$header = new Header();
$footer = new Footer();
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
    <title>Cuppa Joy | Our Menu</title>
</head>
<body class="bg-my-primary-gradient">
<?php
$header->open();
$header->renderNavbar();
$header->close();
?>
<main>
    <div class="content-wrapper">
        <h2>Our Menu</h2>
        <div class="menu-items">
            <?php
            // Generate all coffee figures from the database:
            $query = "select * from coffee";
            $result = Database::getConnection()->query($query);

            for ($i = 0; $i < $result->num_rows; $i++) {
                $row = $result->fetch_object();
                ?>
                <div class="card menu-item">
                    <img class="card-img-top" src="assets/<?php echo $row->image_url ?>" alt="<?php echo $row->name ?>">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $row->name ?></h3>
                        <p class="card-text"><?php echo $row->description ?></p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</main>
<?php
$footer->render();
?>
<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>
