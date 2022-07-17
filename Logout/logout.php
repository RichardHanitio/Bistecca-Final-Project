<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./logout.css">
    </head>
    <body>
        <?php
            echo "<h1 class='title logout-title'>You have logged out</h1>";
            echo "<p class='desc logout-desc'>Click <a href='../index.php' class='link'>here</a> to go to homepage</p>"
        ?>
    </body>
</html>