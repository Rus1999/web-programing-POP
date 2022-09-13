<?php
    // initailize MySQL connection
    include("./sqliConnect.php");

    isset($_POST['prefix_id'])?$prefix_id=$_POST['prefix_id']:$prefix_id="";
    isset($_POST['prefix_nameTH'])?$prefix_nameTH=$_POST['prefix_nameTH']:$prefix_nameTH="";
    isset($_POST['prefix_nameEN'])?$prefix_nameEN=$_POST['prefix_nameEN']:$prefix_nameEN="";

    $sql = "update prefix set prefix_nameTH='$prefix_nameTH', prefix_nameEN='$prefix_nameEN' where prefix_id='$prefix_id';";

    $mysqli->query($sql);

    // close connection
    $mysqli->close();
?>

<meta http-equiv="refresh" content="0; url=./prefix_show.php">