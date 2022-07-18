<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bistecca | Welcome</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./welcome.css">
    </head>
    <body>
        <?php
            echo "<h1 class='title welcome-title'>Welcome, ".$_SESSION["name"]." 👋</h1>";
            echo "<p class='desc welcome-desc'>Thankyou for signing up to Bistecca. By signing up, you can now make reservations, and get tons of discounts every week 😁</p>";
            echo "<p class='desc welcome-desc'>Click <a href='../index.php' class='link'>here</a> to go to homepage</p>"
        ?>
    </body>
</html>