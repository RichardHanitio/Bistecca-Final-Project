<?php 
    require_once "../../lib.php";
    require_once "../../db.php";

    $qryEmail = mysqli_query($conn, "SELECT email FROM user");
    $qryReservation = mysqli_query($conn, "SELECT id_reservation FROM reservation");
    $qryOrder = mysqli_query($conn, "SELECT id_order FROM orders");

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
    <form action="main.php" id="form" method="POST">
        <table>
            <tr>
                <td><label for="">Email</label></td>
                <td>
                    <select name="email" id="main">
                        <?php while($row = mysqli_fetch_array($qryEmail)) {?>
                            <option value="<?=$row[0]?>"><?=$row[0]?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="">Id Reservation</label></td>
                <td>
                    <select name="id_reservation" id="main">
                        <?php while($row = mysqli_fetch_array($qryReservation)) {?>
                            <option value="<?=$row[0]?>"><?=$row[0]?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="">Id Order</label></td>
                <td>
                    <select name="id_order" id="main">
                        <?php while($row = mysqli_fetch_array($qryOrder)) {?>
                            <option value="<?=$row[0]?>"><?=$row[0]?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" name="tambahmain" value="yes"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class='btn'>INSERT</button></td>
            </tr>
        </table>
      </form>
</body>
</html>