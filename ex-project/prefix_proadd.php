<?php
    // initailize MySQL connection
    include("./sqliConnect.php");

    isset($_POST['prefix_nameTH'])?$prefix_nameTH=$_POST['prefix_nameTH']:$prefix_nameTH="";
    isset($_POST['prefix_nameEN'])?$prefix_nameEN=$_POST['prefix_nameEN']:$prefix_nameEN="";

    // sql command
    $sql = "insert into prefix values('', '$prefix_nameTH', '$prefix_nameEN');";
    // sql query
    $mysqli->query($sql);

    // close connection
    $mysqli->close();
?>

<meta http-equiv="refresh" content="0; url=./prefix_show.php">