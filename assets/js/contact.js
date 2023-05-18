document.getElementById("message-form").addEventListener("submit", function (event) {
    event.preventDefault();
    requestAction(
        "create_message",
        new FormData(document.getElementById("message-form")),
        () => showModal(document.getElementById("modalMessageCreated"))
    );
});

function changeTheme() {
    document.body.classList.toggle("dark");
    // toggleBtn.classList.toggle("bx-sun");
    document.querySelectorAll("*").forEach((el) => {
        el.classList.add("transition");
        setTimeout(() => {
            el.classList.remove("transition");
        }, 1000);
    });
}

document.addEventListener("DOMContentLoaded", changeTheme);

document.querySelector(".theme-toggle").addEventListener("click", changeTheme);

document.querySelectorAll('.contact-input').forEach((ipt) => {
    ipt.addEventListener('focus', () => {
        ipt.parentNode.classList.add("focus");
        ipt.parentNode.classList.add("not-empty");
    });
    ipt.addEventListener('blur', () => {
        if (ipt.value === "") {
            ipt.parentNode.classList.remove("not-empty");
        }
        ipt.parentNode.classList.remove("focus");
    });
});
