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
    <div class="card max-width-400 bg-transparent border-0 text-light text-center">
        <img class="card-img-top" src="assets/images/icons/logo_animated.gif" alt="Logo">
        <div class="card-body">
            <h2 class="card-title display-2">Cuppa Joy</h2>
            <hr>
            <p class="card-text">Your Home Away from Home for the Finest Coffee Experience</p>
        </div>
    </div>
    <div>
        <div class="p-5 container-fluid max-width-1200 bg-light rounded-3">
            <?php
            echo createSection(
                "Welcome to Cuppa Joy!",
                "Discover the best coffee experience with our finest selection of beans and exceptional brewing techniques.",
                "Explore Our Menu",
                "menu",
                "assets/images/background2.jpg",
                "background"
            );
            echo createSection(
                "About Us",
                "At Cuppa Joy, our passion is to provide the finest coffee experience by sourcing the best beans and employing expert baristas. We believe that every cup of coffee should be a moment of joy and relaxation.",
                "",
                "",
                "assets/images/background1.jpg",
                "background"
            );
            echo createSection(
                "Join Our Loyalty Program",
                "Become a member of the Cuppa Joy family and enjoy exclusive perks, discounts, and more!",
                "Register Now",
                "contact",
                "assets/images/gallery3.jpg",
                "background"
            );
            echo createSection(
                "Contact Us",
                "Have questions or feedback? We'd love to hear from you! Get in touch with us through our contact form or social media channels.",
                "Contact Form",
                "contact",
                "assets/images/gallery2.jpg",
                "background"
            );
            ?>
        </div>
</main>
<?php renderFooter() ?>
</body>
</html>
<?php

function createSection($title, $description, $buttonText, $buttonLink, $imageSrc, $altText): string {
    return <<<SECTION
        <section>
            <div class="card">
                <div class="card-body">
                    <h2>$title</h2>
                    <p>$description</p>
                    <a href="$buttonLink" class="button">$buttonText</a>
                </div>
                <img class="card-img-bottom" src="$imageSrc" alt="$altText">
            </div>
        </section>
        <hr>
    SECTION;
}

?>
