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
                <td><input type="text" id="username" name="email"></td>
            </tr>
            <tr>
                <td><label for="">Name</label></td>
                <td><input type="text" id="name" name="name"></td>
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="text" id="password" name="password"></td>

            </tr>
            <tr>
                <td><label for="">Phone Number</label></td>
                <td><input type="text" id="phone" name="phone_num"></td>
            </tr>
            <tr>
                <td><label for="">Is Admin</label></td>
                <td><input type="text" name="isadmin" value="0"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="hidden" name="tambahuser" value="yes"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class='btn'>INSERT</button></td>
            </tr>
        </table>
      </form>
</body>
</html>