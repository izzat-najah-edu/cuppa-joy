<?php namespace html;

use Database;

require_once "../includes/component.php";
require_once "../includes/config.php";
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
    <title>العربة | كابا جوي</title>
</head>
<body>
<header>
    <?php require_once "components/navbar.php" ?>
</header>
<main>
    <section class="mb-5">
        <?php echo imageOverlay("../assets/images/backgrounds/machine2.jpg", "العربة"); ?>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4>المشتريات</h4>
                    </div>
                    <div class="card-body">
                        <table class="table cart-table">
                            <tr>
                                <th>النوع</th>
                                <th>الحجم</th>
                                <th>السعر</th>
                                <th>الكمية</th>
                                <th>المجموع</th>
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
                        <h4>ملخص الطلب</h4>
                    </div>
                    <div class="card-body">
                        <p>المجموع: <span id="subtotal"></span></p>
                        <p>الضريبة: <span id="tax"></span></p>
                        <hr>
                        <p>المجموع الكلي: <span id="total"></span></p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-warning w-100">المتابعة للدفع</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="modalItemRemoved">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h5>تمت إزالة العنصر من العربة بنجاح!</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once "components/footer.php" ?>
<script src="../assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script>
    function toggleThemeFixes() {
        document.querySelectorAll(".card").forEach(card => card.classList.toggle("bg-dark"));
        document.querySelector(".table").classList.toggle("text-white");
        document.querySelectorAll(".quantity-change-button").forEach(btn => {
            btn.classList.toggle("text-white");
        });
    }

    document.addEventListener("DOMContentLoaded", calculateTotals);

    document.querySelectorAll(".quantity-change-button").forEach(button =>
        button.addEventListener("click", () => {
            const formData = new FormData();
            formData.set("id", button.dataset.id);
            formData.set("size", button.dataset.size);
            formData.set("quantity-change", button.classList.contains("quantity-increase") ? "1" : "-1");
            asyncRequest(
                "change_quantity",
                formData,
                (response) => {
                    button.parentElement.querySelector(".quantity-value").innerText = response.quantity;
                    calculateTotals();
                }
            );
        })
    );

    document.querySelectorAll(".remove-button").forEach(button =>
        button.addEventListener("click", () => {
            const formData = new FormData();
            formData.set("id", button.dataset.id);
            formData.set("size", button.dataset.size);
            asyncRequest(
                "remove_item",
                formData,
                () => {
                    button.closest("tr").remove();
                    showModal(document.getElementById("modalItemRemoved"));
                    calculateTotals();
                }
            );
        })
    );

    function fillPricesAndGetTotal(cartItemsTableRows) {
        let total = 0;
        cartItemsTableRows.forEach(function (row) {
            let price = parseFloat(row.cells[2].innerText);
            let quantity = parseInt(row.cells[3].querySelector(".quantity-value").innerText);
            let subtotal = price * quantity;

            row.cells[4].innerHTML = subtotal.toFixed(2) + "ILS";
            total += subtotal;
        })
        return total;
    }

    function calculateTotals() {
        const subtotal = fillPricesAndGetTotal(
            document.querySelectorAll('.cart-table tr:not(:first-child)')
        );
        const tax = subtotal * <?php echo Database::getInstance()->getTaxRate() ?>;
        const total = subtotal + tax;

        document.getElementById('subtotal').innerText = subtotal.toFixed(2) + "ILS";
        document.getElementById('tax').innerText = tax.toFixed(2) + "ILS";
        document.getElementById('total').innerText = total.toFixed(2) + "ILS";
    }
</script>
</body>
</html>
