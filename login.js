document.addEventListener("DOMContentLoaded", function () {
    // Elementet e login formes 
    const loginForm = document.querySelector("form");
    const usernameInput = loginForm.querySelector("input[placeholder='Username']");
    const passwordInput = loginForm.querySelector("input[placeholder='Password']");
    const submitButton = loginForm.querySelector("button[type='submit']");

    // validimi per username
    usernameInput.addEventListener("keyup", function () {
        if (usernameInput.value.length < 5) {
            usernameInput.style.border = "2px solid red";
        } else {
            usernameInput.style.border = "2px solid green";
        }
    });

    // validimi per password
    passwordInput.addEventListener("keyup", function () {
        if (passwordInput.value.length < 6) {
            passwordInput.style.border = "2px solid red";
        } else {
            passwordInput.style.border = "2px solid green";
        }
    });

    // validimi ne form 
    loginForm.addEventListener("submit", function (event) {
        const usernameValue = usernameInput.value.trim();
        const passwordValue = passwordInput.value.trim();

        //kushtet
        if (usernameValue.length < 5 || passwordValue.length < 6) {
            event.preventDefault();
            alert("Ju lutem plotesoni fushat korrekt (Username duhet te kete se paku 5 karaktere, Password duhet te kete se paku 6 karaktere).");
        } else {
            alert("U kyqet me sukses!");
        }
    });
});
