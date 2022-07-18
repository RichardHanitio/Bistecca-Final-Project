<?php
    require_once "../../lib.php";

    if(isset($_POST['tambahuser'])){
        global $conn;
        $email =  $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phone_number = $_POST['phone_number'];
        $is_admin = (int)$_POST['isadmin'];
        $qry = mysqli_query($conn, "INSERT INTO user VALUES ('$email','$username','$password','$phone_number','$is_admin')");
        header("location: ../adminPanel.php?page=1");
    }
    else if(isset($_GET['email'])){
        global $conn;
        $email = $_GET['email'];
        $qry = mysqli_query($conn, "DELETE FROM user WHERE email='$email'");
        if($qry){
            header("location: ../adminPanel.php?page=1");
        }
        else{
            echo "FAILED";
        }
        
    }
?>