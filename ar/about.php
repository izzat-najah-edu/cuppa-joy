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
    <title>من نحن | كابا جوي</title>
</head>
<body>
<header>
    <?php require_once "components/navbar.php" ?>
</header>
<main>
    <section class="mb-5">
        <?php echo imageOverlay("../assets/images/backgrounds/machine.jpg", "مهمتنا"); ?>
        <div class="text-box">
            <p>في مقهى القهوة الخاص بنا، نفخر بتقديم تجارب استثنائية لعملائنا. خدماتنا تلبي التفضيلات والاحتياجات
                المتنوعة، مع ضمان الشعور بالترحيب والرضا للجميع.</p>
        </div>
    </section>
    <section class="mb-5">
        <?php echo imageOverlay("../assets/images/backgrounds/coffee.jpg", "قهوتنا"); ?>
        <div class="text-box">
            <p>نحن شغوفون بتقديم قهوة عالية الجودة، مصدرها أخلاقي لعملائنا. باريستا ماهرينا يعتنون بتحضير كل كوب بعناية،
                مضمونين طعمًا رائعًا في كل مرة.</p>
        </div>
    </section>
    <section class="mb-5">
        <?php echo imageOverlay("../assets/images/backgrounds/food.jpg", "شركائنا"); ?>
        <div class="text-box">
            <p>نتعاون مع المزارعين والموردين المحليين لضمان استخدامنا دائمًا لمكونات طازجة ومستدامة. شركاؤنا يشاركوننا
                التزامنا بالجودة والمسؤولية الاجتماعية.</p>
        </div>
    </section>
    <section class="mb-5">
        <?php echo imageOverlay("../assets/images/backgrounds/waitress.jpg", "فريقنا"); ?>
        <div class="text-box">
            <p>موظفونا، الذين نسميهم شركاء، هم في قلب أعمالنا. نستثمر في رفاهيتهم ونموهم الشخصي، ونعزز بيئة عمل إيجابية
                وشاملة.</p>
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
