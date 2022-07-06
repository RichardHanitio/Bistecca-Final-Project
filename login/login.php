<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="login.css">

</head>
<body>

  <div class="split left">
    <div class="centered">
      <img src="../images/LOGO.png">
      <p>“Italian cuisine offers a wide canopy of incredibly diverse food dishes, and the best part of all these sumptuous dishes is that they are made from fresh and simple ingredients.”</p>
      <p>~Chef Leonardo Bonucci</p>
    </div>
  </div>

  <div class="split right">
    <div class="centered1">
      <h2>Login</h2>
      <p>Welcome back! Please enter your details</p>

      <form action="log.php" id="form" method="POST" onsubmit="return validate()">
        <ul>
            <li>
                <label for="">Username</label>
                <input type="text" id="username" name="username" required>
            </li>
            <li>
                <label for="">Password</label>
                <input type="password" id="password" name="password" required>
                <?php 
                  if($_SESSION["UserNotFound"])
                  echo '<div id="wrong">username or password is wrong !</div>';
                ?>
            </li>


            <li id="wrong">

            </li>
            <li id="check">
                <input type="checkbox" id="checkbox" onclick="showPassword()">
                <label for="checkbox">Show password</label>
            </li>

            <li>
                <button type="submit">Login</button>
            </li>
        </ul>
      </form>

      <p>Don't have an account? Sign up</p>
    </div>
  </div>

  <script src="loginJS.js"></script>

</body>
</html>

