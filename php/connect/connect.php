<?php
    $host = "localhost";
    $user = "wwuu12366";
    $pass = "rlacqkqh1!";
    $db = "wwuu12366";
    $connect = new mysqli($host,$user,$pass,$db);
    $connect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "DATABASE Connect False";
    } else {
        // echo "DATABASE Connect True";
    }
?>