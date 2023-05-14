<?php namespace html;

require_once "../actions/render.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="icon" href="../favicon.png" type="image/x-icon">
    <title>About | Cuppa Joy</title>
</head>
<body>
<header>
    <?php require_once "components/navbar.php" ?>
</header>
<main>
    <section class="mb-5">
        <?php echo imageOverlay("../assets/images/backgrounds/machine.jpg", "OUR MISSION"); ?>
        <div class="text-box">
            <p>At our coffee shop, we pride ourselves on delivering exceptional experiences for our customers. Our
                services cater to diverse preferences and needs, ensuring that everyone feels welcome and satisfied.</p>
        </div>
    </section>
    <section class="mb-5">
        <?php echo imageOverlay("../assets/images/backgrounds/coffee.jpg", "OUR BEANS"); ?>
        <div class="text-box">
            <p>We're passionate about providing high-quality, ethically sourced coffee to our customers. Our
                skilled baristas meticulously craft each cup, guaranteeing a delightful taste every time.</p>
        </div>
    </section>
    <section class="mb-5">
        <?php echo imageOverlay("../assets/images/backgrounds/food.jpg", "OUR PARTNERS"); ?>
        <div class="text-box">
            <p>We collaborate with local farmers and suppliers to ensure we always use fresh, sustainable
                ingredients. Our partners share our commitment to quality and social responsibility.</p>
        </div>
    </section>
    <section class="mb-5">
        <?php echo imageOverlay("../assets/images/backgrounds/waitress.jpg", "OUR STAFF"); ?>
        <div class="text-box">
            <p>Our employees, whom we call partners, are at the heart of our business. We invest in their
                well-being and personal growth, fostering a positive and inclusive work environment.</p>
        </div>
    </section>
</main>
<?php require_once "components/footer.php" ?>
<script src="../assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>
