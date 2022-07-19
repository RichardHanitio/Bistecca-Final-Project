<?php 
    require "../lib.php";
    require "../db.php";
    $query = "INSERT INTO user VALUES (?,?,?,?,?)";
    
    if(isset($_POST["signup"])) {
        $email = $_POST["email"];
        $name = $_POST["name"];
        $phone_number = $_POST["phone_number"];
        $password = $_POST["password"];
        $is_admin = false;
        
        $check_email = mysqli_query($conn, "SELECT email FROM user where email='$email'");
        
        // check email
        if(mysqli_num_rows($check_email) > 0) {
            header("Location: signup.php?err=Your email is already taken");
        } else {
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssssi", $email, $name, $password, $phone_number, $is_admin);
            $stmt->execute();
            $_SESSION["name"] = $name;
            $_SESSION["email"] = $email;
            header("Location: ../Notification/notification.php?notif=welcome");
        }

    } else {
        header("Location: signup.php");
    }
?>