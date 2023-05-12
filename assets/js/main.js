function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + encodeURIComponent(value || "") + expires + "; path=/";
}

function getCookie(name) {
    const cookiesArray = document.cookie.split(";");
    for (let cookie of cookiesArray) {
        cookie = cookie.trim();
        if (cookie.indexOf(name) === 0) {
            return decodeURIComponent(cookie.substring(name.length + 1));
        }
    }
    return null;
}

function asyncRequest(action, body, onload) {
    const xhr = new XMLHttpRequest();
    xhr.open("post", `actions/${action}.php`, true);
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

function showModal(modal) {
    new bootstrap.Modal(modal, {}).show();
}
