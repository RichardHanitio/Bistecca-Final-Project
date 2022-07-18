let popUpPayment = document.querySelector(".pop-up-payment");
let logoOvo = document.querySelector(".logo-ovo");
let logoBca = document.querySelector(".logo-bca");
let clicked = false;

function choosePaymentMethod() {
    popUpPayment.style.display = "flex";
    if (clicked) {
        return true;
    } else {
        return false;
    }
}

logoOvo.addEventListener("click", () => {
    clicked = true;
});

logoBca.addEventListener("click", () => {
    clicked = true;
});
