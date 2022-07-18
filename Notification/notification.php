<?php 
    session_start(); 
    
    if($_GET["notif"]=="signout") {
        session_destroy();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bistecca</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="notification.css">
    </head>
    <body>
        <?php
            if($_GET["notif"]=="checkout") {
                echo "<h1 class='title notif-title'>Thankyou, ".$_SESSION["name"]." 🙏</h1>";
                echo "<p class='subtitle notif-subtitle'>For making a reservation in Bistecca. We hope you can enjoy the hospitality here in Bistecca,<br> looking forward to seeing you here 🥰 </p>";
                echo "<p class='desc notif-desc'>Here is your reservation bill. You can download it here 👇</p>";
                // echo "<p class='desc welcome-desc'>Click <a href='../index.php' class='link'>here</a> to go to homepage</p>"
            }
            else if($_GET["notif"]=="welcome") {
                echo "<h1 class='title notif-title'>Welcome, ".$_SESSION["name"]." 👋</h1>";
                echo "<p class='subtitle notif-subtitle'>Thankyou for signing up to Bistecca. By signing up, you can now make reservations, and get tons of discounts every week 😁</p>";
                echo "<p class='desc notif-desc'>Click <a href='../index.php' class='link'>here</a> to go to homepage</p>";
            }
            else if($_GET["notif"]=="signout") {
                echo "<h1 class='title notif-title'>You have logged out</h1>";
                echo "<p class='desc notif-desc '>Click <a href='../index.php' class='link'>here</a> to go to homepage</p>";
            }

        ?>
    </body>  
</html>