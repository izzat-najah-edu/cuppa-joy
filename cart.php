<?php namespace html;

use Database;

require_once "includes/component.php";
require_once "includes/config.php";
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
                    <div class="card-body">
                        <table class="table cart-table">
                            <tr>
                                <th>Item</th>
                                <th>Size</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                            <?php
                            foreach ($_SESSION["cart"] as $id => $sizes) {
                                $coffee = Database::getInstance()->getCoffee(strval($id))->fetch_object();
                                foreach ($sizes as $size => $properties) {
                                    $size = ucfirst($size);
                                    echo <<<ROW
                            <tr>
                                <td><img src="assets/$coffee->image_url" alt="$coffee->name" width="50px">
                                    $coffee->name</td>
                                <td>$size</td>
                                <td>$coffee->price</td>
                                <td>{$properties["quantity"]}</td>
                                <td></td>
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
</main>
<?php renderFooter() ?>
<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script>
    const TAX_RATE = <?php echo Database::getInstance()->getTaxRate() ?>;

    function fillPricesAndGetTotal(cartItemsTableRows) {
        let total = 0;
        cartItemsTableRows.forEach(function (row) {
            let price = parseFloat(row.cells[2].innerText);
            let quantity = parseInt(row.cells[3].innerText);
            let subtotal = price * quantity;

            row.cells[4].innerText = subtotal.toFixed(2) + "ILS";
            total += subtotal;
        })
        return total;
    }

    document.addEventListener("DOMContentLoaded", function calculateTotals() {
        const subtotal = fillPricesAndGetTotal(
            document.querySelectorAll('.cart-table tr:not(:first-child)')
        );
        const tax = subtotal * TAX_RATE;
        const total = subtotal + tax;

        document.getElementById('subtotal').innerText = subtotal.toFixed(2) + "ILS";
        document.getElementById('tax').innerText = tax.toFixed(2) + "ILS";
        document.getElementById('total').innerText = total.toFixed(2) + "ILS";
    })
</script>
</body>
</html>
