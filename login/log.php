<?php 
    require "../library.php";
    require "../db.php";
    $query = "SELECT * FROM user WHERE email=?";

    if(isset($_POST['login'])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $res = $stmt->get_result()->fetch_assoc();

        if(!empty($res)){
            $_SESSION["name"] = $res["name"];
            header("Location: ../index.php");
        } else {
            header("Location: ./login.php?err=Wrong email or password");
        }

    } else {
        header("Location: login.php");
    }



    // require "../lib.php";

    // $username = $_POST['username'];
    // $password = $_POST['password'];

    // $qry = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

    // $prep = $conn->prepare($qry);

    // if($prep->execute()){
    //     $hasil = $prep->get_result();
    //     if(mysqli_fetch_array($hasil)){
    //         $data= mysqli_fetch_assoc($hasil);
    //         $_SESSION['UserNotFound'] = false;
    //         $_SESSION['user_login'] = true;
    //         $_SESSION['user_email'] = $data['email'];
    //         header("location: test.php");
    //     }
    //     else{
    //         $_SESSION['UserNotFound'] = true;
    //         header("location: login.php");
    //     }
        
    // }
?>  