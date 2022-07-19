<?php 
    require_once "../../lib.php";
    require_once "../../db.php";
    
    $id_main =  $_GET['id_main'];
    $email = trim($_GET['email']);
    $id_reservation = trim($_GET['id_reservation']);
    $id_order = trim($_GET['id_order']);
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
                <td><label for="">Id Main</label></td>
                <td><input type="text" id="" name="" value="<?= $id_main ?> " disabled></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" id="" name="id_main" value="<?= $id_main ?>"></td>
            </tr>
            <tr>
                <td><label for="">Email</label></td>
                <td> 
                    <select name="email" id="">
                        <?php while($row = mysqli_fetch_array($qryEmail)) {?>
                            <option <?php if($email==$row[0]) echo "selected='selected'" ?>  value="<?=$row[0]?>"><?=$row[0]?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="">id_reservation</label></td>
                <td>
                    <select name="id_reservation" id="">
                        <?php while($row = mysqli_fetch_array($qryReservation)) { ?>
                            <option <?php if($id_reservation == $row[0]) echo "selected='selected'" ?>  value="<?=$row[0]?>"><?=$row[0]?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="">id_order</label></td>
                <td>
                    <select name="id_order" id="">
                        <?php while($row = mysqli_fetch_array($qryOrder)) { ?>
                            <option <?php if($id_order==$row[0]) echo "selected='selected'" ?>  value="<?=$row[0]?>"><?=$row[0]?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" name="changemain" value="yes"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class='btn'>Change</button></td>
            </tr>
        </table>
      </form>
</body>
</html>