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

