<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="user.php" id="form" method="POST">
        <ul>
            <li>
                <label for="">Email</label>
                <input type="text" id="username" name="email">
            </li>
            <li>
                <label for="">Username</label>
                <input type="text" id="username" name="username">
            </li>
            <li>
                <label for="">Phone Number</label>
                <input type="text" id="phone" name="phone_number">
            </li>
            <li>
                <label for="">Password</label>
                <input type="password" id="password" name="password">

            </li>
            <li>
                <input type="hidden" name="isadmin" value="0">
                <input type="hidden" name="tambahuser" value="yes">
            </li>
            <li>
                <button type="submit">Sign Up</button>
            </li>
        </ul>
      </form>
</body>
</html>