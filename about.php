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
    <link rel="stylesheet" href="assets/css/about.css">
    <title>About | Cuppa Joy</title>
</head>
<body>
<header>
    <?php renderNavbar() ?>
</header>
<main>
    <div class="wrapper">
        <h1>Our Services</h1>
        <p>At our coffee shop, we pride ourselves on delivering exceptional experiences for our customers. Our services
            cater to diverse preferences and needs, ensuring that everyone feels welcome and satisfied.</p>
        <div class="content-box">
            <?php
            echo createCard(
                "bx bxs-coffee-bean",
                "Coffee & Craft",
                "We're passionate about providing high-quality, ethically sourced coffee to our customers. Our
                    skilled baristas meticulously craft each cup, guaranteeing a delightful taste every time."
            );
            echo createCard(
                "bx bxs-group",
                "Our Partners",
                "We collaborate with local farmers and suppliers to ensure we always use fresh, sustainable
                    ingredients. Our partners share our commitment to quality and social responsibility."
            );
            echo createCard(
                "bx bxs-time-five",
                "24/7 Call Center Services",
                "We understand that our customers may need assistance at any time. Our dedicated call center is
                    available 24/7 to answer your questions and address any concerns."
            );
            echo createCard(
                "bx bx-pointer",
                "Social Media Marketing",
                "Stay connected with us through our social media channels. We share updates, promotions, and engaging
                    content to keep you informed and entertained."
            );
            echo createCard(
                "bx bxs-planet",
                "Planet",
                "We're committed to being environmentally responsible. We strive to reduce our carbon footprint,
                    minimize waste, and give back to the planet through sustainable practices."
            );
            echo createCard(
                "bx bxs-conversation",
                "People",
                "Our employees, whom we call partners, are at the heart of our business. We invest in their
                    well-being and personal growth, fostering a positive and inclusive work environment."
            );
            ?>
        </div>
    </div>
</main>
<?php renderFooter() ?>
</body>
</html>
<?php

function createCard($icon, $title, $content): string {
    return <<<CARD
        <div class="card">
            <i class="$icon"></i>
            <h2>$title</h2>
            <p>$content</p>
        </div>
    CARD;
}

?>
