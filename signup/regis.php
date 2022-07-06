<?php 
    require "../lib.php";

    $email =  $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone_number = $_POST['phone_number'];

    $insertQuery = "INSERT INTO user VALUES ('$email', '$username', '$password', '$phone_number')";

    $prep = $conn->prepare($insertQuery);
    
    if($prep->execute()){
        header("Location: ../index.html");
    }
    else echo "Nope";
?>