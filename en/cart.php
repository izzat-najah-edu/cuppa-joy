<?php namespace html;

use Database;

require_once "../includes/render.php";
require_once "../includes/config.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="icon" href="../assets/images/icons/favicon.png" type="image/x-icon">
    <title>Cart | Cuppa Joy</title>
</head>
<body>
<header>
    <?php require_once "includes/navbar.php" ?>
</header>
<main>
    <section class="mb-5">
        <?php echo imageOverlay("../assets/images/backgrounds/machine2.jpg", "SHOPPING CART"); ?>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4>Cart Items</h4>
                    </div>
                    <div class="card-body">
                        <table class="table cart-table">
                            <tr>
                                <th>Item</th>
                                <th>Size</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                            <?php
                            foreach ($_SESSION["cart"] as $id => $sizes) {
                                $coffee = Database::getInstance()->getCoffee(strval($id))->fetch_object();
                                foreach ($sizes as $size => $properties) {
                                    $ucsize = ucfirst($size);
                                    echo <<<ROW
                            <tr>
                                <td><img src="../assets/$coffee->image_url" alt="$coffee->name" width="50px">
                                    <span class="ml-5">$coffee->name</span></td>
                                <td>$ucsize</td>
                                <td>$coffee->price ILS</td>
                                <td>
                                    <button type="button" data-id="$id" data-size="$size"
                                            class="quantity-change-button quantity-decrease btn">-</button>
                                    <span class="quantity-value">{$properties["quantity"]}</span>
                                    <button type="button" data-id="$id" data-size="$size"
                                            class="quantity-change-button quantity-increase btn">+</button>
                                </td>
                                <td></td>
                                <td>
                                    <button type="button" data-id="$id" data-size="$size"
                                            class="btn btn-outline-dark remove-button">Remove</button>
                                </td>
                            </tr>
                        ROW;
                                }
                            }
                            ?>
                        </table>
                    </div>
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
    <div class="modal fade" id="modalItemRemoved">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h5>Item removed from cart successfully!</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once "includes/footer.php" ?>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/cart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script>
    TAX_RATE = <?php echo Database::getInstance()->getTaxRate() ?>
</script>
</body>
</html>
