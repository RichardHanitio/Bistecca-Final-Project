let password = document.getElementById("password");
let confirmPassword = document.getElementById("confirm_password");
let passwordWarning = document.getElementById("password-warning");
let signup = document.getElementById("signup");

let showMessage = (show, message = "") => {
    if (show) {
        passwordWarning.style = "display : block;";
        passwordWarning.innerText = message;
    } else {
        passwordWarning.style = "display : none;";
    }
};

let validatePasswordLength = () => {
    if (password.value.length < 8 && password.value.length > 0) {
        showMessage(true, "Your password must be more than 7 characters");
    } else {
        showMessage(false);
        return true;
    }
    return false;
};

let validatePasswordMatch = (e) => {
    if (password.value != e.target.value && e.target.value != "") {
        showMessage(true, "Password did not match");
    } else if (validatePasswordLength()) {
        showMessage(false);
        signup.disabled = false;
        return true;
    }
    return false;
};

password.addEventListener("input", (e) => {
    validatePasswordLength(e);
});

confirmPassword.addEventListener("input", (e) => {
    validatePasswordMatch(e);
});
