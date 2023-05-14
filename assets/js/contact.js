document.getElementById("message-form").addEventListener("submit", function (event) {
    event.preventDefault();
    asyncRequest(
        "create_message",
        new FormData(document.getElementById("message-form")),
        () => showModal(document.getElementById("modalMessageCreated"))
    );
});

function setUpContactThemeToggle() {
    const inputs = document.querySelectorAll('.contact-input');
    const toggleBtn = document.querySelector(".theme-toggle");
    const allElements = document.querySelectorAll("*");

    toggleBtn.addEventListener("click", () => {
        document.body.classList.toggle("dark");
        // toggleBtn.classList.toggle("bx-sun");
        allElements.forEach((el) => {
            el.classList.add("transition");
            setTimeout(() => {
                el.classList.remove("transition");
            }, 1000);
        });
    });

    inputs.forEach((ipt) => {
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
    })
}

setUpContactThemeToggle();
