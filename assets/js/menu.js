document.querySelectorAll(".quantity-change-form").forEach(form =>
    form.addEventListener("submit", event => {
        event.preventDefault();
        asyncRequest(
            "change_quantity",
            new FormData(form),
            () => showModal(document.getElementById("modalItemAdded"))
        );
    })
);
