<?php
    // initialize connection
    include("./sqliConnect.php");

    isset($_GET['pro_id'])?$pro_id=$_GET['pro_id']:$pro_id="";

    $sql = "delete from project where pro_id='$pro_id';";
    $mysqli->query($sql);

    // close connection
    $mysqli->close();
?>

<meta http-equiv="refresh" content="0; url=./project_show.php">