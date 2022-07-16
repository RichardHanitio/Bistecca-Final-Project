<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="location.css">
</head>
<body>
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
                <input type="button" class="btn pop-up-btn" value="Sign Up Now" />
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
                <input type="button" value="Reservations" class="btn navbar-reserve-btn" />
                <input type="button" value="Login" class="btn navbar-login-btn" onclick="window.location.href='/Login/login.php'"/>
            </div>
        </div>
    </nav>
    <div class="img1">
        <div class="centered">
            <h2 class="title">OUR LOCATIONS</h2>
            <p>Come Or Reserve A Table</p>
        </div>
    </div>

    <div class="location">
        <p>Location</p>
    </div>

    <div class="grid-container">
        <div class="container">
            <img src="../images/location.png" alt="Avatar" class="image">
            <div class="middle">
              <div class="text">CARROLWOOD</div>
            </div>
        </div>
        <div class="container">
            <img src="../images/location1.png" alt="Avatar" class="image">
            <div class="middle">
              <div class="text">CORAL SPRINGS</div>
            </div>
        </div>
        <div class="container">
            <img src="../images/location.png" alt="Avatar" class="image">
            <div class="middle">
              <div class="text">DAYTONA</div>
            </div>
        </div>
        <div class="container">
            <img src="../images/location1.png" alt="Avatar" class="image">
            <div class="middle">
              <div class="text">GAINESVILLE</div>
            </div>
        </div>
        <div class="container">
            <img src="../images/location.png" alt="Avatar" class="image">
            <div class="middle">
              <div class="text">JACKSONVILLE</div>
            </div>
        </div>
        <div class="container">
            <img src="../images/location1.png" alt="Avatar" class="image">
            <div class="middle">
              <div class="text">KISSIMMEE</div>
            </div>
        </div>
        <div class="container">
            <img src="../images/location.png" alt="Avatar" class="image">
            <div class="middle">
              <div class="text">LONGWOOD</div>
            </div>
        </div>
        <div class="container">
            <img src="../images/location1.png" alt="Avatar" class="image">
            <div class="middle">
              <div class="text">ORANGE PARK</div>
            </div>
        </div>
        <div class="container">
            <img src="../images/location.png" alt="Avatar" class="image">
            <div class="middle">
              <div class="text">SOUTH TAMPA</div>
            </div>
        </div>
    </div>

    <div class="location">
        <p></p>
    </div>

    <div class="img1">
        <div class="centered1">
            <div class="text1">
                <h2>Ready For Dinner?</h2>
            </div>
            <button type="submit" class="submit-button">See The Menu</button>
            
        </div>
    </div>

</body>
</html>

<script src="/script.js" defer></script>

