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
    <link rel="stylesheet" href="assets/css/contact.css">
    <title>Contact | Cuppa Joy</title>
</head>
<body>
<header>
    <div class="container">
        <ul>
            <li>
                <a href="#" class="logo">
                    <div class="images">
                        <img src="assets/images/icons/logo.png" class="logo-forDark" title="Publius" alt="logo">
                        <img src="assets/images/icons/logo.png" class="logo-forLight" title="Publius" alt="logo">
                    </div>
                    <h2>Cuppa Joy<span>.</span></h2>
                </a>
            </li>
            <li>
                <a href="index" class="nav-link">Home</a>
            </li>
            <li>
                <a href="#" class="nav-link">Join</a>
            </li>
            <li>
                 <span class="nav-link theme-toggle">
                     <i class="fa-solid fa-sun"></i>
                     <i class="fa-solid fa-moon"></i>
                 </span>
            </li>
        </ul>
    </div>
</header>
<main>
    <section class="contact">
        <div class="container">
            <div class="left">
                <div class="form-wrapper">
                    <div class="contact-heading">
                        <h1>Lets work together <span>.</span></h1>
                        <p class="text">or reach us viz : <a href="mailto:sualiman@gmail.com">sualiman@gmail.com</a></p>
                    </div>
                    <form action="contact.php" method="post" class="contact-form">
                        <div class="input-wrap">
                            <input class="contact-input" autocomplete="off" name="first-name" type="text" required>
                            <label>First Name</label>
                            <i class="icon fa-solid fa-address-card"></i>
                        </div>

                        <div class="input-wrap">
                            <input class="contact-input" autocomplete="off" name="last-name" type="text" required>
                            <label>Last Name</label>
                            <i class="icon fa-solid fa-address-card"></i>
                        </div>

                        <div class="input-wrap w-100">
                            <input class="contact-input" autocomplete="off" name="email" type="email" required>
                            <label>Email</label>
                            <i class="icon fa-solid fa-envelope"></i>
                        </div>

                        <div class="input-wrap textarea w-100">
                            <textarea name="message" autocomplete="off" class="contact-input" required></textarea>
                            <label>Massage</label>
                            <i class="icon fa-solid fa-inbox"></i>
                        </div>

                        <div class="contact-buttons ">
                            <button class="btn upload">
                                 <span>
                                     <i class="fa-solid fa-paperclip"></i> add attachment
                                 </span>
                                <input type="file" name="attachment">
                            </button>
                            <input type="submit" value="Send massage" class="btn">
                        </div>
                        <?php
                        // Check if this page was reached by submitting the contact form

                        $fn = $_POST['first-name'] ?? null;
                        $ln = $_POST['last-name'] ?? null;
                        $email = $_POST['email'] ?? null;
                        $message = $_POST['message'] ?? null;

                        if (isset($fn) and isset($ln) and isset($email) and isset($message)) {
                            if (isset($dbConnection)) {

                                // Insert message into database:

                                $statement = $dbConnection->prepare(
                                    "insert into messages (first_name, last_name, email, message) values (?,?,?,?)"
                                );
                                $statement->bind_param(
                                    "ssss", $fn, $ln, $email, $message
                                );
                                if ($statement->execute()) {
                                    ?>
                                    <div class="alert alert-success">
                                        <strong>Success!</strong> you message has been sent to us!
                                    </div>
                                    <?php
                                }
                                $statement->close();
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="image-wrapper">
                    <img src="assets/images/gallery/background1.jpg" class="img" alt="icon">
                </div>
            </div>
        </div>
    </section>
</main>
<?php renderFooter() ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha384-Y7LSKwoY+C2iyfu/oupNnkGEN3EgA6skmJeVg5AyQk7ttcjX0XsLREmmuJW/SdbU"
        crossorigin="anonymous"></script>
</body>
</html>
