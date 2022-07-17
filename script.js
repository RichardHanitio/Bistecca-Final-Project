let btnReservation = document.querySelector(".navbar-reserve-btn");
let popup = document.querySelector(".pop-up");
let closePopup = document.querySelector(".pop-up-close");

function reservationOnClick() {
    popup.style.display = "flex";
}

closePopup.addEventListener("click", () => {
    popup.style.display = "none";
})