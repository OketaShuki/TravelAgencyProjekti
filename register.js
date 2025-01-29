
document.addEventListener("DOMContentLoaded", function () {
    // Elementet e register formes
    const registerForm = document.querySelector(".form3");
    const usernameInput = registerForm.querySelector("input[placeholder='Username']");
    const emailInput = registerForm.querySelector("input[placeholder='E-mail']");
    const passwordInput = registerForm.querySelector("input[placeholder='Password']");
    const confirmPasswordInput = registerForm.querySelector("input[placeholder='Confirm Password']");
    const submitButton = registerForm.querySelector(".btn3");

    // Validmi i username-it (minimum 5 karaktere)
    usernameInput.addEventListener("keyup", function () {
        if (usernameInput.value.length < 5) {
            usernameInput.style.border = "2px solid red";
        } else {
            usernameInput.style.border = "2px solid green";
        }
    });

    // validmi i emailit
    emailInput.addEventListener("keyup", function () {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailInput.value)) {
            emailInput.style.border = "2px solid red";
        } else {
            emailInput.style.border = "2px solid green";
        }
    });

    // Validimi i passwordit (minimum 6 karaktere)
    passwordInput.addEventListener("keyup", function () {
        if (passwordInput.value.length < 6) {
            passwordInput.style.border = "2px solid red";
        } else {
            passwordInput.style.border = "2px solid green";
        }
    });

    // validimi i confirm password (peerputhshmeria e passwordit)
    confirmPasswordInput.addEventListener("keyup", function () {
        if (confirmPasswordInput.value !== passwordInput.value) {
            confirmPasswordInput.style.border = "2px solid red";
        } else {
            confirmPasswordInput.style.border = "2px solid green";
        }
    });

    // validimi i formes
    registerForm.addEventListener("submit", function (event) {
        const username = usernameInput.value.trim();
        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();
        const confirmPassword = confirmPasswordInput.value.trim();

        let valid = true;
        let errorMessage = "Ju lutem plotesoni fushat si duhet:\n";

        // validim usernameit
        if (username.length < 5) {
            valid = false;
            errorMessage += "- Username duhet te kete minimum 5 karaktere.\n";
        }

        // Validimi i email
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            valid = false;
            errorMessage += "- Shkruani nje email valide.\n";
        }

        // Validimi i password
        if (password.length < 6) {
            valid = false;
            errorMessage += "- Password duhet te kete minimum 6 karaktere.\n";
        }

        // Validimi i confirm password 
        if (confirmPassword !== password) {
            valid = false;
            errorMessage += "- Password dhe Confirm Password nuk perputhen.\n";
        }

        // kur plotsdohen te gjitha kushtet dhe kryhet regjistrimi me sukses
        if (!valid) {
            event.preventDefault();
            alert(errorMessage);
        } else {
            alert("Regjistrimi u krye me sukses!");
        }
    });
});