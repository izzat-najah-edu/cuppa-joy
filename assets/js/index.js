document.getElementById("subscribeForm").addEventListener("submit", event => {
    event.preventDefault();
    asyncRequest(
        "subscribe",
        new FormData(document.getElementById("subscribeForm")),
        () => {
            showModal(document.getElementById("modalSubscribed"));
            document.querySelectorAll("#subscribeForm input")
                .forEach(input => input.value = "");
        }
    );
});
