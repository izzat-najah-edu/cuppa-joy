document.addEventListener("DOMContentLoaded", function setupTheme() {
    if (localStorage.getItem("theme") && localStorage.getItem("theme") === "dark") {
        localStorage.setItem("theme", "light");
        toggleTheme();
    }
});

function toggleTheme() {
    const theme = localStorage.getItem("theme") === "light" ? "light" : "dark";
    const newTheme = theme === "light" ? "dark" : "light";
    localStorage.setItem("theme", newTheme);
    toggleThemeBody();
    toggleThemeNavbar(theme, newTheme);
    toggleThemeModals();
    toggleThemeButtons();
    if (typeof toggleThemeFixes === 'function') {
        toggleThemeFixes();
    }
}

function toggleThemeBody() {
    document.querySelector("body").classList.toggle("dark-theme");
}

function toggleThemeNavbar(theme, newTheme) {
    const nav = document.querySelector("nav");
    nav.classList.toggle("navbar-light");
    nav.classList.toggle("navbar-dark");
    nav.querySelectorAll("img").forEach(img => {
        img.src = img.src.replace(newTheme, theme);
    })
}

function toggleThemeModals() {
    document.querySelectorAll(".modal-content")
        .forEach(modal => modal.classList.toggle("bg-dark"));
}

function toggleThemeButtons() {
    document.querySelectorAll(".btn").forEach(btn => {
        if (!btn.classList.replace("btn-outline-dark", "btn-outline-light")) {
            btn.classList.replace("btn-outline-light", "btn-outline-dark");
        }
    })
}

function toggleLanguage(newLanguage) {
    localStorage.setItem("lang", newLanguage ?? "en");
    location.href = ".."
}

function showModal(modal) {
    new bootstrap.Modal(modal, {}).show();
}

function requestAction(action, body, onload) {
    const xhr = new XMLHttpRequest();
    xhr.open("post", `../actions/${action}.php`, true);
    xhr.onload = function () {
        if (this.status !== 200) {
            console.log("Request failed");
            return;
        }
        let response = JSON.parse(this.responseText);
        if (!response.success) {
            console.log(response.message);
            return;
        }
        if (onload) {
            onload(response);
        }
    }
    xhr.send(body);
}
