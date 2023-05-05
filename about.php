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
    <title>About | Cuppa Joy</title>
</head>
<body>
<header>
    <?php renderNavbar() ?>
</header>
<main>
    <section class="mb-5">
        <?php echo imageOverlay("assets/images/backgrounds/machine.jpg", "MISSION"); ?>
        <div class="text-box">
            <p>At our coffee shop, we pride ourselves on delivering exceptional experiences for our customers. Our
                services cater to diverse preferences and needs, ensuring that everyone feels welcome and satisfied.</p>
        </div>
    </section>
    <section class="mb-5">
        <?php echo imageOverlay("assets/images/backgrounds/coffee.jpg", "OUR BEANS"); ?>
        <div class="text-box">
            <p>We're passionate about providing high-quality, ethically sourced coffee to our customers. Our
                skilled baristas meticulously craft each cup, guaranteeing a delightful taste every time.</p>
        </div>
    </section>
    <section class="mb-5">
        <?php echo imageOverlay("assets/images/backgrounds/food.jpg", "OUR PARTNERS"); ?>
        <div class="text-box">
            <p>We collaborate with local farmers and suppliers to ensure we always use fresh, sustainable
                ingredients. Our partners share our commitment to quality and social responsibility.</p>
        </div>
    </section>
    <section class="mb-5">
        <?php echo imageOverlay("assets/images/backgrounds/waitress.jpg", "OUR STAFF"); ?>
        <div class="text-box">
            <p>Our employees, whom we call partners, are at the heart of our business. We invest in their
                well-being and personal growth, fostering a positive and inclusive work environment.</p>
        </div>
    </section>
</main>
<?php renderFooter() ?>
</body>
</html>
