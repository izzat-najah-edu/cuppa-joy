<?php namespace html;

use Database;

require_once "../actions/render.php";
require_once "../actions/config.php";
?>
<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/arabic.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="icon" href="../favicon.png" type="image/x-icon">
    <title>القائمة | كابا جوي</title>
</head>
<body>
<header>
    <?php require_once "includes/navbar.php" ?>
</header>
<main>
    <section class="mb-5">
        <?php echo imageOverlay("../assets/images/backgrounds/table.jpg", "القائمة"); ?>
        <hr>
        <div class="text-box text-center">
            <p class="font-bigger">
                اكتشف اختياراتنا الرائعة من القهوة، مصممة بعناية لتلبية رغباتك.</p>
        </div>
        <hr>
    </section>
    <section class="content-wrapper">
        <div class="menu-items menu-grid">
            <?php
            // Generate all coffee figures from the database:
            $result = Database::getInstance()->getAllCoffee();
            for ($i = 0; $i < $result->num_rows; $i++) {
                $row = $result->fetch_object();
                echo <<<CARD
            <div class="card menu-item">
                <img class="card-img-top" src="../assets/$row->image_url" alt="$row->name">
                <div class="card-header font-glow">
                    <h3 class="card-title text-center font-fancy">$row->name_arabic</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">$row->description_arabic</p>
                </div>
                <div class="card-footer">
                    <div class="d-flex">
                        <div class="mx-auto">
                            <p class="font-bold text-decoration">$row->price ILS</p>
                        </div>
                        <form class="quantity-change-form" method="post">
                            <input type="hidden" name="id" value="$row->id">
                            <input type="hidden" name="quantity-change" value="1">
                            <div class="dropdown mx-auto">
                                <ul class="dropdown-menu">
                                    <li><label class="dropdown-item">
                                        <input type="radio" name="size" value="s" id="size-s">
                                        <span>صغير</span></label></li>
                                    <li><label class="dropdown-item">
                                        <input type="radio" name="size" value="m" id="size-m">
                                        <span>متوسط</span></label></li>
                                    <li><label class="dropdown-item">
                                        <input type="radio" name="size" value="l" id="size-l">
                                        <span>كبير</span></label></li>
                                </ul>
                                <button type="button" class="btn btn-outline-dark dropdown-toggle" 
                                        data-bs-toggle="dropdown">الحجم
                                </button>
                                <button type="submit" class="btn btn-warning">
                                    إضافة إلى السلة
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        CARD;
            }
            ?>
        </div>
        <div class="modal fade" id="modalItemAdded">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5>تمت إضافة العنصر إلى السلة بنجاح!</h5>
                    </div>
                    <div class="modal-footer">
                        <a href="cart" class="btn btn-warning">عرض في السلة</a>
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">إغلاق</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require_once "includes/footer.php" ?>
<script src="../assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script>
    document.querySelectorAll(".quantity-change-form").forEach(form =>
        form.addEventListener("submit", event => {
            event.preventDefault();
            asyncRequest(
                "change_quantity",
                new FormData(form),
                () => showModal(document.getElementById("modalItemAdded"))
            );
        })
    )
</script>
</body>
</html>
