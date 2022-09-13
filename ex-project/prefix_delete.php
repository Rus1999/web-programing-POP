<?php
    // connect
    include("./sqliConnect.php");

    isset($_GET['prefix_id'])?$prefix_id=$_GET['prefix_id']:$prefix_id="";

    $sql = "delete from prefix where prefix_id='$prefix_id';";
    $mysqli->query($sql);

    // close connection
    $mysqli->close();
?>

<meta http-equiv="refresh" content="0; url=./prefix_show.php">