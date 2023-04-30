<?php
require_once "includes/header.php";
require_once "includes/footer.php";

use component\Footer;
use component\Header;

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
    <title>Cuppa Joy | Home</title>
</head>
<body class="bg-my-primary-gradient">
<?php
$header->open();
$header->renderNavbar();
$header->close();
?>
<main class="p-5">
    <div class="card max-width-400 bg-transparent border-0 text-light text-center">
        <img class="card-img-top" src="assets/images/icons/logo_animated.gif" alt="Logo">
        <div class="card-body">
            <h2 class="card-title display-2">Cuppa Joy</h2>
            <hr>
            <p class="card-text">Your Home Away from Home for the Finest Coffee Experience</p>
        </div>
    </div>
    <div class="p-5 container-fluid max-width-1200 bg-light rounded-3">
        <div class="p-5 container-fluid max-width-1200 bg-light rounded-3">
            <section id="home-section">
                <div class="card">
                    <div class="card-body">
                        <h2>Welcome to Cuppa Joy!</h2>
                        <p>Discover the best coffee experience with our finest selection of beans and exceptional
                            brewing
                            techniques.</p>
                        <a href="menu.php" class="button">Explore Our Menu</a>
                    </div>
                    <img class="card-img-bottom" src="assets/images/background2.jpg" alt="background">
                </div>
            </section>
            <hr>
            <section id="about-section">
                <div class="card">
                    <div class="card-body">
                        <h2>About Us</h2>
                        <p>At Cuppa Joy, our passion is to provide the finest coffee experience by sourcing the best
                            beans
                            and
                            employing expert baristas. We believe that every cup of coffee should be a moment of joy and
                            relaxation.</p>
                    </div>
                    <img class="card-img-bottom" src="assets/images/background1.jpg" alt="background">
                </div>
            </section>
            <hr>
            <section id="register-section">
                <div class="card">
                    <div class="card-body">
                        <h2>Join Our Loyalty Program</h2>
                        <p>Become a member of the Cuppa Joy family and enjoy exclusive perks, discounts, and more!</p>
                        <a href="contact.php" class="button">Register Now</a>
                    </div>
                    <img class="card-img-bottom" src="assets/images/gallery3.jpg" alt="background">
                </div>
            </section>
            <hr>
            <section id="contact-section">
                <div class="card">
                    <div class="card-body">
                        <h2>Contact Us</h2>
                        <p>Have questions or feedback? We'd love to hear from you! Get in touch with us through our
                            contact
                            form or
                            social media channels.</p>
                        <a href="contact.php" class="button">Contact Form</a>
                    </div>
                    <img class="card-img-bottom" src="assets/images/gallery2.jpg" alt="background">
                </div>
            </section>
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
