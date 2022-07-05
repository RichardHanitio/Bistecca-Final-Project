<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reservation.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,700;1,400&family=Inria+Serif:wght@400;700&display=swap" rel="stylesheet">
    <title>Reservation</title>
</head>
<body>
    <nav>
        <div class="container navbar-container">
            <div class="navbar-logo">
                <img src="/images/bistecca-logo-white.png" />
            </div>
            <div class="navbar-links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="navbar-reserve">
                <input
                    type="button"
                    value="Reservations"
                    class="btn navbar-reserve-btn"
                />
            </div>
        </div>
    </nav>
    
    <div class="banner">Reservation</div>
    <div class="reservation-container">
        <form class="reservation-info" action="test.php" method="POST"> 
            <div class="card a">
                <img src="Calendar.png" alt="">
                <div class="icon-info">Reservation Date</div>
                <input type="date" name="reservation_date" id="">
            </div>
            <div class="card b">
                <img src="Clock.png" alt="">
                <div class="icon-info">Time</div>
                <select name="reservation_time" id="">
                    <option value="07:00">07:00</option>
                    <option value="12:30">12:30</option>
                    <option value="17:00">17:00</option>
                    <option value="21:00">21:00</option>
                </select>

            </div>
            <div class="card c">
                <img src="Guest.png" alt="">
                <div class="icon-info">Guest</div>
                <input type="number" name="reservation_guest" id="">
            </div>
            <div class="card d">
                <img src="Location.png" alt="">
                <div class="icon-info">Location</div>
                <select name="reservation_location" id="">
                    <option value="Italian Greenville">Italian Greenville</option>
                    <option value="Carrolwood">Carrolwood</option>
                    <option value="Coral Springs">Coral Springs</option>
                    <option value="Daytona">Daytona</option>
                    <option value="Gainsville">Gainsville</option>
                    <option value="Jacksonville">Jacksonville</option>
                    <option value="Kissimmee">Kissimmee</option>
                    <option value="Longwood">Longwood</option>
                    <option value="Orange Park">Orange Park</option>
                    <option value="South Tampa">South Tampa</option>
                </select>
            </div>
            <button type="submit">RESERVE</button>
        </form> 
    </div>
     
</body>
</html>