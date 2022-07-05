<?php 
    $calendar = $_POST['reservation_date'];
    $time = $_POST['reservation_time'];
    $guest = $_POST['reservation_guest'];
    $location = $_POST['reservation_location'];


    echo "$calendar--$time--$guest--$location";


?>