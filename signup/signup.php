<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="signup.css">
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
      <h2>Sign Up</h2>
      <p>Sign up to get reservation access, and get weekly discounts!</p>

      <form action="regis.php" id="form" method="POST">
        <ul>
            <li>
                <label for="">Email</label>
                <input type="text" id="username" name="email">
            </li>
            <li>
                <label for="">Username</label>
                <input type="text" id="username" name="username">
                <div class="meter" id="userInvalid"></div>
            </li>
            <li>
                <label for="">Phone Number</label>
                <input type="text" id="phone" name="phone_number">
                <div class="meter" id="passNotMatch"></div>
            </li>
            <li>
                <label for="">Password</label>
                <input type="password" id="password" name="password">
                <div class="meter" id="meter"></div>
            </li>
            <li>
                <label for="">Confirm Password</label>
                <input type="password" id="confirmPassword">
                <div class="meter" id="passNotMatch"></div>
            </li>

            </li>
            <li id="check">
                <input type="checkbox" id="checkbox" onclick="showPassword()">
                <label for="checkbox">Show password</label>
            </li>

            <li>
                <button type="submit">Sign Up</button>
            </li>
        </ul>
      </form>
    </div>
  </div>


</body>
</html>

