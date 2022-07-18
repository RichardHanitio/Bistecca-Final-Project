<?php
    require_once(__DIR__."..\..\library.php");
    echo '
        <div class="pop-up">
            <div class="pop-up-container">
                <div class="pop-up-inner-container">
                    <svg width="25" height="25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="pop-up-close">
                        <path d="M17.25 17.25 6.75 6.75"></path>
                        <path d="m17.25 6.75-10.5 10.5"></path>
                    </svg>
                    <img src="/images/man-grill-steak.png" class="pop-up-img" />
                    <div class="title pop-up-title">Sign Up to Make Reservations!</div>
                        <div class="desc pop-up-desc">By signing up, you can make reservations, get daily discount, special menus, and much more!</div>
                        <input type="button" class="btn pop-up-btn" value="Sign Up Now" onclick="window.location.href=\'/SignUp/signup.php\'"/>
                    </div>
                </div>
            </div>
        </div>

        <nav>
            <div class="container navbar-container">
                <div class="navbar-logo">
                    <img src="/images/bistecca-logo-white.png" />
                </div>
                <div class="navbar-links">
                    <ul>
                        <li><a href="/index.php">Home</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="/Locations/location.php">Locations</a></li>
                        <li><a href="/About/about.php">About</a></li>
                    </ul>
                </div>
                <div class="navbar-buttons">
    ';
    if (!is_logged_in()) {
        echo '
            <input type="button" value="Reservations" class="btn navbar-reserve-btn" onclick="reservationOnClick()" />
            <input type="button" value="Login" class="btn navbar-login-btn" onclick="window.location.href=\'/Login/login.php\'"/>
        ';
    } else {
        echo '
            <input type="button" value="Reservations" class="btn navbar-reserve-btn" onclick="window.location.href=\'/Reservation/Reservation.php\'"/>
            <input type="button" value="Logout" class="btn navbar-login-btn" onclick="window.location.href=\'/Logout/logout.php\'"/>
        ';
    }

    echo '</div></div></nav>';
?>