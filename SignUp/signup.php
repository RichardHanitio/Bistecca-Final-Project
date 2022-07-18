<?php require_once("../lib.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bistecca | Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="split left">
        <svg width="45" height="45" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="back" onclick="window.location.href='/index.php'">
            <path d="M12 2.25A9.75 9.75 0 0 0 2.25 12c0 5.384 4.365 9.75 9.75 9.75 5.384 0 9.75-4.366 9.75-9.75 0-5.385-4.366-9.75-9.75-9.75Zm2.936 14.25-1.061 1.06L8.315 12l5.56-5.56 1.06 1.06-4.5 4.5 4.5 4.5Z"></path>
        </svg>
        <div class="centered">
            <img src="../images/LOGO.png">
            <p>“Italian cuisine offers a wide canopy of incredibly diverse food dishes, and the best part of all these sumptuous dishes is that they are made from fresh and simple ingredients.”</p>
            <p>~Chef Leonardo Bonucci</p>
        </div>
    </div>
    <div class="split right">
        <div class="centered1">
            <h2 class="title sign-up-title">Sign Up</h2>
            <p class="desc sign-up-desc">Sign up to get reservation access, and get weekly discounts!</p>
            
            <?php display_error()?>

            <form action="signup-db.php" id="form" method="POST">
                <ul>
                    <li>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </li>
                    <li>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </li>
                    <li>
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone_number" required>
                    </li>
                    <li>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </li>
                    <li>
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" id="confirm_password" required>
                    </li>
                    <div id="password-warning" class="error"></div>
                    <li>
                        <button type="submit" name="signup" id="signup" disabled>Sign Up</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>
</html>

<script src="./signup.js"></script>