<?php
require_once "includes/header.php";
require_once "includes/footer.php";

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
    <link rel="stylesheet" href="assets/css/about.css">
    <title>Cuppa Joy | About</title>
</head>
<body class="bg-my-primary-gradient">
<?php
$header->open();
$header->renderNavbar();
$header->close();
?>
<main>
    <div class="wrapper">
        <h1>Our Services</h1>
        <p>At our coffee shop, we pride ourselves on delivering exceptional experiences for our customers. Our services
            cater to diverse preferences and needs, ensuring that everyone feels welcome and satisfied.</p>
        <div class="content-box">
            <div class="card">
                <i class='bx bxs-coffee-bean'></i>
                <h2>Coffee & Craft</h2>
                <p>
                    We're passionate about providing high-quality, ethically sourced coffee to our customers. Our
                    skilled baristas meticulously craft each cup, guaranteeing a delightful taste every time.
                </p>
            </div>
            <div class="card">
                <i class='bx bxs-group'></i>
                <h2>Our Partners</h2>
                <p>
                    We collaborate with local farmers and suppliers to ensure we always use fresh, sustainable
                    ingredients. Our partners share our commitment to quality and social responsibility.
                </p>
            </div>
            <div class="card">
                <i class='bx bxs-time-five'></i>
                <h2>24/7 Call Center Services</h2>
                <p>
                    We understand that our customers may need assistance at any time. Our dedicated call center is
                    available 24/7 to answer your questions and address any concerns.
                </p>
            </div>
            <div class="card">
                <i class='bx bx-pointer'></i>
                <h2>Social Media Marketing</h2>
                <p>
                    Stay connected with us through our social media channels. We share updates, promotions, and engaging
                    content to keep you informed and entertained.
                </p>
            </div>
            <div class="card">
                <i class='bx bxs-planet'></i>
                <h2>Planet</h2>
                <p>
                    We're committed to being environmentally responsible. We strive to reduce our carbon footprint,
                    minimize waste, and give back to the planet through sustainable practices.
                </p>
            </div>
            <div class="card">
                <i class='bx bxs-conversation'></i>
                <h2>People</h2>
                <p>
                    Our employees, whom we call partners, are at the heart of our business. We invest in their
                    well-being and personal growth, fostering a positive and inclusive work environment.
                </p>
            </div>
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
