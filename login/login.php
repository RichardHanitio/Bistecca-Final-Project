<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bistecca | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">

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
            <h2 class="title log-in-title">Login</h2>
            <p class="desc log-in-desc">Welcome back! Please enter your details</p>
            <?php
                if (isset($_GET["err"])) {
                    echo "<p class='error'>" . $_GET["err"] . "</p>";
                }
            ?>

            <form action="log.php" id="form" method="POST" onsubmit="return validate()">
                <ul>
                    <li>
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" required>
                    </li>
                    <li>
                        <label for="">Password</label>
                        <input type="password" id="password" name="password" required>
                    </li>
                    <li id="wrong">

                    </li>
                    <li id="check">
                        <input type="checkbox" id="checkbox" onclick="showPassword()">
                        <label for="checkbox">Show password</label>
                    </li>
                    <li>
                        <button type="submit" name="login">Login</button>
                    </li>
                </ul>
            </form>

            <p>Don't have an account? <a href="../SignUp/signup.php" class="link">Sign up</a></p>
        </div>
    </div>

    <script src="login.js"></script>

</body>

</html>