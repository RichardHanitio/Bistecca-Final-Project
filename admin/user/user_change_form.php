<?php 
    $email = $_GET['email'];
    $name = $_GET['name'];
    $password = $_GET['password'];
    $phone_num = $_GET['phone_num'];
    $is_admin = $_GET['is_admin'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../form_style.css">
</head>
<body>
    <form action="user.php" id="form" method="POST">
        <table>
            <tr>
                <td><label for="">Email</label></td>
                <td><input type="text" id="" name="" value="<?= $email ?> disabled"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" id="" name="email" value="<?= $email ?>"></td>
            </tr>
            <tr>
                <td><label for="">Name</label></td>
                <td><input type="text" id="name" name="name" value="<?= $name ?>"></td>
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="text" id="password" name="password" value="<?= $password ?>"></td>

            </tr>
            <tr>
                <td><label for="">Phone Number</label></td>
                <td><input type="text" id="phone" name="phone_num" value="<?= $phone_num ?>"></td>
            </tr>
            <tr>
                <td><label for="">Is Admin</label> </td>
                <td><input type="text" name="isadmin" value="0"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" name="changeuser" value="yes"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class='btn'>Change</button></td>
            </tr>
        </table>
      </form>
</body>
</html>