<?php
    require_once "db.php";

    function is_logged_in() {
        return isset($_SESSION["name"]);
    }

    function selectTableUser($table, $keyword=null){
        global $conn;
        $key = "$keyword" . "%";
        if($keyword == null){
            return mysqli_query($conn, "SELECT * FROM $table");
        }
        else{
            return mysqli_query($conn, "SELECT * FROM $table WHERE email LIKE '$key'");
        }
    }

    function selectTableMenu($table, $keyword=null){
        global $conn;
        $key = "$keyword" . "%";
        if($keyword == null){
            return mysqli_query($conn, "SELECT * FROM $table");
        }
        else{
            return mysqli_query($conn, "SELECT * FROM $table WHERE id_menu LIKE '$key' OR name LIKE '$key'");
        }
    }

    function selectTableReservation($table, $keyword=null){
        global $conn;
        $key = "$keyword" . "%";
        if($keyword == null){
            return mysqli_query($conn, "SELECT * FROM $table");
        }
        else{
            return mysqli_query($conn, "SELECT * FROM $table WHERE id_reservation LIKE '$key' OR date LIKE '$key'");
        }
    }

    function selectTableOrders($table, $keyword=null){
        global $conn;
        $key = "$keyword" . "%";
        if($keyword == null){
            return mysqli_query($conn, "SELECT * FROM $table");
        }
        else{
            return mysqli_query($conn, "SELECT * FROM $table WHERE id_order LIKE '$key'");
        }
    }

    function selectTableMain($table, $keyword=null){
        global $conn;
        $key = "$keyword" . "%";
        if($keyword == null){
            return mysqli_query($conn, "SELECT * FROM $table");
        }
        else{
            return mysqli_query($conn, "SELECT * FROM $table WHERE id_main LIKE '$key' OR email LIKE '$key' OR id_reservation LIKE '$key'");
        }
    }
?>