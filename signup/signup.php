<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bistecca | Sign Up</title>
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
            <h2 class="title sign-up-title">Sign Up</h2>
            <p class="desc sign-up-desc">Sign up to get reservation access, and get weekly discounts!</p>
            <?php
                if (isset($_GET["err"])) {
                    echo "<p class='error'>" . $_GET["err"] . "</p>";
                }
            ?>

            <form action="regis.php" id="form" method="POST">
                <ul>
                    <li>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </li>
                    <li>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </li>
                    <li>
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone_number" required>
                    </li>
                    <li>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </li>
                    <li>
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" id="confirm_password" required>
                    </li>
                    <li id="check">
                        <input type="checkbox" id="checkbox" onclick="showPassword()">
                        <label for="checkbox">Show password</label>
                    </li>
                    <li>
                        <button type="submit" name="signup">Sign Up</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>

</html>