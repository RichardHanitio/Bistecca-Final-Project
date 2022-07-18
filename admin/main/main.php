<?php
    require_once "../../library.php";
    require_once "../../db.php";

    if(isset($_POST['tambahmain'])){
        global $conn;
        $email = $_POST['email'];
        $id_reservation = $_POST['id_reservation'];
        $id_order = $_POST['id_order'];

        $qry = mysqli_query($conn, "INSERT INTO main VALUES ('','$email','$id_reservation','$id_order')");
        if($qry){
            header("location: ../adminPanel.php?page=5");
        }
        else{
            echo $conn->error;
        }
    }
    else if(isset($_GET['id_main'])){
        global $conn;
        $id_main = $_GET['id_main'];
        $qry = mysqli_query($conn, "DELETE FROM main WHERE id_main='$id_main'");
        if($qry){
            header("location: ../adminPanel.php?page=5");
        }
        else{
            echo "FAILED";
        }
    }
    else if(isset($_POST['changemain'])){
        global $conn;
        $id_main =  $_POST['id_main'];
        $email = $_POST['email'];
        $id_reservation = $_POST['id_reservation'];
        $id_order = $_POST['id_order'];

        $qry = mysqli_query($conn, "UPDATE main SET email='$email',id_reservation='$id_reservation',id_order='$id_order' WHERE id_main='$id_main'");
       
        if($qry){
            header("location: ../adminPanel.php?page=5");
        }
        else{
            echo $conn->error;
        }
    }
?>