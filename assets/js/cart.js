function addToCart(addItemForm, triggeredModal) {
    let xhr = new XMLHttpRequest();
    xhr.open("post", "actions/add_to_cart.php", true);
    xhr.onload = function () {
        if (this.status !== 200) {
            console.log("Request failed");
            return;
        }
        let result = JSON.parse(this.responseText);
        if (!result.success) {
            console.log(result.message);
            return;
        }
        if (triggeredModal) {
            showModal(triggeredModal);
        }
    }
    xhr.send(new FormData(addItemForm));
}
