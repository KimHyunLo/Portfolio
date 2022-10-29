<?php
    $host = "localhost";
    $user = "leeas016";
    $pw = "slrspdla1!";
    $dbName = "leeas016";
    $connect = new mysqli($host, $user, $pw, $dbName);
    $connect -> set_charset("utf8");
    if(mysqli_connect_errno()){
        echo "database connect false";
    } else {
        //echo "database connect true";
    }
?>