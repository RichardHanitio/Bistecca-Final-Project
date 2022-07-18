<?php
    require_once "../../library.php";
    require_once "../../db.php";

    if(isset($_POST['tambahuser'])){
        global $conn;
        $email =  $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $phone_num = $_POST['phone_num'];
        $is_admin = (int)$_POST['isadmin'];
        $qry = mysqli_query($conn, "INSERT INTO user VALUES ('$email','$name','$password','$phone_num','$is_admin')");
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
    else if(isset($_POST['changeuser'])){
        global $conn;
        $email =  $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $phone_num = $_POST['phone_num'];
        $is_admin = (int)$_POST['isadmin'];
        $qry = mysqli_query($conn, "UPDATE user SET name='$name',password='$password',phone_num='$phone_num',is_admin='$is_admin' WHERE email='$email'");
        header("location: ../adminPanel.php?page=1");
    }
?>