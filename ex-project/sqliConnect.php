<?php
    // initialize connection
    $mysqli = new mysqli("localhost", "root", "", "webproject");
    if($mysqli->connect_error){
        echo "Fail to connect to MySQL".$mysqli->connect_errno;
    }
    $mysqli->query("SET NAMES utf8");
?>