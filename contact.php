<?php namespace html;

session_start();

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
                        <img src="assets/images/icons/logo2.png" class="logo-forDark" title="Publius" alt="logo">
                        <img src="assets/images/icons/logo2.png" class="logo-forLight" title="Publius" alt="logo">
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
                    <form id="message-form" method="post" class="contact-form">
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
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="image-wrapper">
                    <img src="assets/images/gallery/background1.jpg" class="img" alt="icon">
                </div>
            </div>
            <div class="modal fade" id="modalMessageCreated">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h5>Message has been sent successfully!</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php renderFooter() ?>
<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script>
    document.getElementById("message-form").addEventListener("submit", function (event) {
        event.preventDefault();
        createMessage(this);
    });

    function createMessage(messageForm) {
        let xhr = new XMLHttpRequest();
        xhr.open("post", "actions/create_message.php", true);
        xhr.onload = function () {
            triggerModalOnLoad(this, document.getElementById("modalMessageCreated"));
        }
        xhr.send(new FormData(messageForm));
    }

    function setUpContactThemeToggle() {
        const inputs = document.querySelectorAll('.contact-input');
        const toggleBtn = document.querySelector(".theme-toggle");
        const allElements = document.querySelectorAll("*");

        toggleBtn.addEventListener("click", () => {
            document.body.classList.toggle("dark");
            // toggleBtn.classList.toggle("bx-sun");
            allElements.forEach((el) => {
                el.classList.add("transition");
                setTimeout(() => {
                    el.classList.remove("transition");
                }, 1000);
            });
        });

        inputs.forEach((ipt) => {
            ipt.addEventListener('focus', () => {
                ipt.parentNode.classList.add("focus");
                ipt.parentNode.classList.add("not-empty");
            });
            ipt.addEventListener('blur', () => {
                if (ipt.value === "") {
                    ipt.parentNode.classList.remove("not-empty");
                }
                ipt.parentNode.classList.remove("focus");
            });
        })
    }

    setUpContactThemeToggle();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha384-Y7LSKwoY+C2iyfu/oupNnkGEN3EgA6skmJeVg5AyQk7ttcjX0XsLREmmuJW/SdbU"
        crossorigin="anonymous"></script>
</body>
</html>
