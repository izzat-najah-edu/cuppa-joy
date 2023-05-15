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
        requestAction(
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
        requestAction(
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
    const tax = subtotal * TAX_RATE;
    const total = subtotal + tax;

    document.getElementById('subtotal').innerText = subtotal.toFixed(2) + "ILS";
    document.getElementById('tax').innerText = tax.toFixed(2) + "ILS";
    document.getElementById('total').innerText = total.toFixed(2) + "ILS";
}
