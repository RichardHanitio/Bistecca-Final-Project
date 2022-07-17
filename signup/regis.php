<?php 
    require "../library.php";
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
            $_SESSION["error_message"] = "Email already exists";
            header("Location: signup.php?err=Your email is already taken");
        } else {
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssssi", $email, $name, $phone_number, $password, $is_admin);
            $stmt->execute();
            $_SESSION["name"] = $name;
            header("Location: ../index.php");
        }

    } else {
        header("Location: signup.php");
    }
?>