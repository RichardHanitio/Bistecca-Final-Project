<?php 
    require "../lib.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

    $prep = $conn->prepare($qry);

    if($prep->execute()){
        $hasil = $prep->get_result();
        if(mysqli_fetch_array($hasil)){
            $data= mysqli_fetch_assoc($hasil);
            $_SESSION['UserNotFound'] = false;
            $_SESSION['user_login'] = true;
            $_SESSION['user_email'] = $data['email'];
            header("location: test.php");
        }
        else{
            $_SESSION['UserNotFound'] = true;
            header("location: login.php");
        }
        
    }
?>  