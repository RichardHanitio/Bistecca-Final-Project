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
    <title>Bistecca | Reservation</title>
</head>

<body>
    

    <?php require "../Navbar/navbar.php" ?>

    <div class="banner">Reservation</div>
    <div class="reservation-container">
        <form class="reservation-info" action="reservation-db.php" method="POST">
            <div class="card a">
                <img src="Calendar.png" alt="">
                <div class="icon-info">Reservation Date</div>
                <input type="date" name="reservation_date" id="" required>
            </div>
            <div class="card b">
                <img src="Clock.png" alt="">
                <div class="icon-info">Time</div>
                <select name="reservation_time" id="" required>
                    <option value="07:00">07:00</option>
                    <option value="12:30">12:30</option>
                    <option value="17:00">17:00</option>
                    <option value="21:00">21:00</option>
                </select>

            </div>
            <div class="card c">
                <img src="Guest.png" alt="">
                <div class="icon-info">Num of Guest</div>
                <input type="number" name="reservation_guest" id="" min="1" required>
            </div>
            <div class="card d">
                <img src="Location.png" alt="">
                <div class="icon-info">Location</div>
                <select name="reservation_location" id="" required>
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
            <button type="button" class="btn btn-reserve" onclick="choosePaymentMethod()">RESERVE</button>
            <div class="pop-up pop-up-payment">
                <div class="pop-up-container pop-up-container-payment" onclick>
                    <svg width="25" height="25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="pop-up-close pop-up-close-notif">
                        <path d="M17.25 17.25 6.75 6.75"></path>
                        <path d="m17.25 6.75-10.5 10.5"></path>
                    </svg>
                    <div class="pop-up-inner-container pop-up-inner-container-payment">
                        <div class="title pop-up-title pop-up-title-payment">Choose Your Payment Method</div>
                        <div class="logos">
                            <button type="submit" class="logo logo-ovo" name="reserve-ovo">
                                <!-- <img src="../images/ovo.png" alt="ovo" onclick="window.location.href='../Notification/notification.php?notif=checkout'" /> -->
                                <img src="../images/ovo.png" alt="ovo"  />
                            </button>
                            <button type="submit" class="logo logo-bca" name="reserve-bca">
                                <img src="../images/bca.png" alt="bca" />
                            </butto>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="../script.js" defer></script>
    <script src="./reservation.js" defer></script>

</body>

</html>