document.querySelectorAll(".quantity-change-form").forEach(form =>
    form.addEventListener("submit", event => {
        event.preventDefault();
        requestAction(
            "change_quantity",
            new FormData(form),
            () => showModal(document.getElementById("modalItemAdded"))
        );
    })
);
