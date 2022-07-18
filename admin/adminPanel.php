<?php 
    require_once "../lib.php";
    $_SESSION['isAdmin'] = true;

    if(!isset($_GET['keyword'])) $_GET['keyword'] = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminStyle.css">
    <title>Admin Panel</title>
</head>
<body>
    <!-- Autentikasi Login Admin -->
    <?php if($_SESSION['isAdmin']) { ?>

        <div class="navAdmin">
            <div class="blank"></div>
            <a href="logoutAdmin.php">LOGOUT</a>
        </div>
        <div class="content">
            <aside>
                <a href="adminPanel.php?page=1" class="asi">User</a>
                <a href="adminPanel.php?page=2" class="asi">Menu</a>
                <a href="adminPanel.php?page=3" class="asi">User</a>
                <a href="adminPanel.php?page=4" class="asi">User</a>
                <a href="adminPanel.php?page=5" class="asi">User</a>
                <a href="adminPanel.php?page=6" class="asi">User</a>
            </aside>

            <div class="container">
                <!-- user -->
                <?php if(!isset($_GET['page']) || $_GET['page'] == 1) {?>
                    <div class="container-side">
                        <a href="user/user_form.php" class="btn">Tambah Data</a>
                        <form class="right" action="adminPanel.php" method="GET">
                            <input type="text" id="search" placeholder='Search Keyword . . .' name='keyword'>
                            <input type="hidden" name="page" value='1'>
                            <input type="submit" value="send" class="btn">    
                        </form>
                    </div>
                    <table>
                        <tr>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Password</th>
                            <th>PhoneNum</th>
                            <th>IsAdmin</th>
                            <th>edit</th>
                        </tr>
                        
                        <?php $table = selectTableUser("user", $_GET['keyword']);  while($row = mysqli_fetch_array($table)) { ?>
                            <tr>
                                <td><?= $row[0] ?></td>
                                <td><?= $row[1] ?></td>
                                <td><?= $row[2] ?></td>
                                <td><?= $row[3] ?></td>
                                <td><?= $row[4] ?></td>
                                <td>
                                    <a href="user/user.php?email=<?= $row[0] ?>">Hapus</a> 
                                    <a href="user/user_change_form.php?NIM=<?= $row[0] ?> &nama=<?= $row[1] ?> &kelas=<?= $row[2] ?> &email =<?= $row[3] ?> &jurusan=<?= $row[4] ?> &noTelp=<?= $row[5] ?>">Ubah</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>


                <!-- menu -->
                <?php } else if ($_GET['page'] == 2) { ?>
                        



                <!-- menu -->
                <?php } else if ($_GET['page'] == 3) { ?>



                <!-- menu -->
                <?php } else if ($_GET['page'] == 4) { ?>




                <!-- menu -->
                <?php } else if ($_GET['page'] == 5) { ?>




                <!-- menu -->
                <?php } else if ($_GET['page'] == 2) { ?>


                <?php } ?>
            </div>
        </div>

        

    <?php } else header("location: ../index.php");?>
</body>
</html>