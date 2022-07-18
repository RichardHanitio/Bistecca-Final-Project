<?php
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

    function display_error() {
        if (isset($_GET["err"])) {
            echo "<p class='error'>" . $_GET["err"] . "</p>";
        }
    }
?>