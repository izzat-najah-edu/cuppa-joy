<?php namespace html;

require_once "includes/component.php";
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
    <title>Home | Cuppa Joy</title>
</head>
<body>
<header>
    <?php renderNavbar() ?>
</header>
<main>
    <section class="mb-5">
        <?php echo imageOverlay("assets/images/backgrounds/beans.jpg", "Cuppa Joy"); ?>
        <div class="text-box">
            <p>Cuppa Joy is a cozy and welcoming coffee shop, dedicated to serving the finest coffee and
                delicious treats, served by our expert baristas devoted to crafting the perfect cup with
                exceptional attention to detail.</p>
        </div>
    </section>
    <section class="mb-5">
        <?php echo imageOverlay("assets/images/backgrounds/shop.jpg", "Our Menu"); ?>
        <div class="text-box">
            <p>Experience the unique flavors of our Single Origin coffee, sourced from the
                finest coffee-producing regions around the world.</p>
        </div>
    </section>
    <section class="mb-5">
        <?php echo imageOverlay("assets/images/backgrounds/waitress2.jpg", "About Us") ?>
        <div class="text-box">
            <p>Our expert baristas are devoted to crafting each cup to perfection, with unwavering
                attention to detail.
            </p>
        </div>
    </section>
</main>
<?php renderFooter() ?>
</body>
</html>
