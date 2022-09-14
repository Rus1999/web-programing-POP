<?php
    // connection
    include("./sqliConnect.php");

    isset($_GET['mem_id'])?$mem_id=$_GET['mem_id']:$mem_id="";

    $sql = "delete from member where mem_id='$mem_id';";
    $mysqli->query($sql);

    // close connection
    $mysqli->close();
?>

<meta http-equiv="refresh" content="0; url=./member_show.php">