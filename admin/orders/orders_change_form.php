<?php 
    require_once "../../library.php";
    require_once "../../db.php";
    
    $id_order =  $_GET['id_order'];
    $id_menu = trim($_GET['id_menu']);
    $amount = (int)$_GET['amount'];
    $subtotal = $_GET['subtotal'];

    $qry = mysqli_query($conn, "SELECT id_menu FROM menu");

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
    <form action="orders.php" id="form" method="POST">
        <table>
            <tr>
                <td><label for="">Id Order</label></td>
                <td><input type="text" id="" name="" value="<?= $id_order ?> " disabled></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" id="" name="id_order" value="<?= $id_order ?>"></td>
            </tr>
            <tr>
                <td><label for="">Id Menu</label></td>
                <td> 
                    <select name="id_menu" id="">
                        <?php while($row = mysqli_fetch_array($qry)) {?>
                            <option <?php if($id_menu==$row[0]) echo "selected='selected'" ?> value="<?=$row[0]?>"><?=$row[0]?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="">Amount</label></td>
                <td><input type="number" id="" name="amount" value="<?=$amount?>"></td>

            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" name="changeorders" value="yes"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class='btn'>Change</button></td>
            </tr>
        </table>
      </form>
</body>
</html>