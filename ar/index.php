<?php namespace html;

require_once "../includes/component.php";
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
    <link rel="icon" href="../favicon.png" type="image/x-icon">
    <title>الرئيسية | كابا جوي</title>
</head>
<body>
<header>
    <?php require_once "components/navbar.php" ?>
</header>
<main>
    <section class="mb-5">
        <?php echo imageOverlay("../assets/images/backgrounds/beans.jpg", "كابا جوي"); ?>
        <div class="text-box">
            <p>كابا جوي هو مقهى دافئ ومرحب، مكرس لتقديم أفضل القهوة والحلويات اللذيذة، التي يقدمها لك خبراء الباريستا
                لدينا المكرسين لصنع الكوب المثالي بدقة استثنائية.</p>
        </div>
    </section>
    <section class="mb-5">
        <?php echo imageOverlay("../assets/images/backgrounds/shop.jpg", "تسوق الآن"); ?>
        <div class="text-box">
            <p>جرب النكهات الفريدة من قهوتنا ذات المنشأ الواحد، المصدرة من أفضل مناطق إنتاج القهوة حول العالم.</p>
        </div>
    </section>
    <section class="mb-5">
        <?php echo imageOverlay("../assets/images/backgrounds/waitress2.jpg", "ابحث عنا") ?>
        <div class="text-box mb-5">
            <p>خبراء الباريستا لدينا مكرسون لصنع كل كوب بكل الكمال، مع الاهتمام الدؤوب بالتفاصيل.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="embed-responsive embed-responsive-16by9 border border-5 rounded p-3">
                    <iframe class="embed-responsive-item"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3381.9924479196623!2d35.20689131520518!3d31.768319681285653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x150329d0a5c5a5ad%3A0x4dc7f66f4b4e4e0c!2sChurch%20of%20the%20Nativity!5e0!3m2!1sen!2s!4v1643501926958!5m2!1sen!2s"
                            allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="mb-5 py-5">
        <div class="container">
            <h2 class="text-center mb-5 font-bold">صور المتجر</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php for ($i = 1; $i <= 6; $i++) {
                    echo <<<IMAGE
            <div class="col">
                <div class="card">
                    <img src="../assets/images/gallery/gallery$i.jpg" alt="Gallery$i"
                         class="card-img-top border border-dark rounded gallery-image">
                </div>
            </div>
        IMAGE;
                }
                ?>
            </div>
        </div>
    </section>
    <hr>
    <section class="mb-5 newsletter-signup py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h3 class="mb-3 font-bold">اشترك في نشرتنا الإخبارية</h3>
                    <p class="mb-4">ابق على اطلاع بأحدث أخبارنا ومنتجاتنا وعروضنا.</p>
                    <form id="subscribeForm" method="post" class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="أدخل بريدك الإلكتروني"
                               aria-label="أدخل بريدك الإلكتروني" required>
                        <button class="btn btn-warning" type="submit" id="button-addon2">اشتراك</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalSubscribed">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5>شكرا لاشتراكك في نشرتنا الإخبارية!</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">إغلاق</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
</main>
<?php require_once "components/footer.php" ?>
<script src="../assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script>
    document.getElementById("subscribeForm").addEventListener("submit", event => {
        event.preventDefault();
        asyncRequest(
            "subscribe",
            new FormData(document.getElementById("subscribeForm")),
            () => {
                showModal(document.getElementById("modalSubscribed"));
                document.querySelectorAll("#subscribeForm input").forEach(input => input.value = "");
            }
        );
    })
</script>
</body>
</html>
