<?php
    // initailize MySQL connection
    include("./sqliConnect.php");

    isset($_POST['fac_id'])?$fac_id=$_POST['fac_id']:$fac_id="";
    isset($_POST['fac_name'])?$fac_name=$_POST['fac_name']:$fac_name="";
    isset($_POST['fac_detail'])?$fac_detail=$_POST['fac_detail']:$fac_detail="";

    $sql = "update faculty set fac_name='$fac_name', fac_detail='$fac_detail' where fac_id='$fac_id';";
    

    $mysqli->query($sql);

    // close connection
    $mysqli->close();
?>

<meta http-equiv="refresh" content="0; url=./faculty_show.php">