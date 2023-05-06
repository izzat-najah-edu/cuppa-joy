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
    <title>Cart | Cuppa Joy</title>
</head>
<body>
<header>
    <?php renderNavbar() ?>
</header>
<main>
    <section class="mb-5">
        <?php echo imageOverlay("assets/images/backgrounds/machine2.jpg", "CART"); ?>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4>Cart Items</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <!-- List cart items here -->
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Order Summary</h4>
                    </div>
                    <div class="card-body">
                        <p>Subtotal: <span id="subtotal"></span></p>
                        <p>Tax: <span id="tax"></span></p>
                        <hr>
                        <p>Total: <span id="total"></span></p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-warning w-100">Proceed to Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php renderFooter() ?>
</body>
</html>
