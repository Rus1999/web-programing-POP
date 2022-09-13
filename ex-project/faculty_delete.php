<?php
    // initailize MySQL connection
    include("./sqliConnect.php");

    isset($_GET['fac_id'])?$fac_id=$_GET['fac_id']:$fac_id="";

    $sql = "delete from faculty where fac_id='$fac_id';";
    $mysqli->query($sql);

    // close connection
    $mysqli->close();
?>

<meta http-equiv="refresh" content="0; url=./faculty_show.php">