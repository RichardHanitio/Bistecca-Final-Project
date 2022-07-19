<?php
    require "../lib.php";
    require "../db.php";

    $qry = "INSERT INTO reservation VALUES(?,?,?,?,?)";
    if(isset($_POST["reserve-ovo"]) || isset($_POST["reserve-bca"])) {
        $date = $_POST["reservation_date"];
        $time = $_POST["reservation_time"];
        $guest = $_POST["reservation_guest"];
        $location = $_POST["reservation_location"];
        $id = generateNextId("reservation", "id_reservation");
        
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("ssssi",$id, $date, $time, $location, $guest);
        $stmt->execute();
        
        header("Location: ../Notification/notification.php?notif=checkout&reservationid=$id");

    } else {
        header("Location: reservation.php");
    }
?>