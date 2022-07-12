let btnReservation = document.querySelector(".navbar-reserve-btn");
let popup = document.querySelector(".pop-up");
let closePopup = document.querySelector(".pop-up-close");

btnReservation.addEventListener("click", () => {
    popup.style.display = "block";
})

closePopup.addEventListener("click", () => {
    popup.style.display = "none";
})