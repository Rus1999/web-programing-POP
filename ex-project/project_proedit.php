<?php
    // initialize mySQL connection
    include("./sqliConnect.php");

    isset($_POST['pro_id'])?$pro_id=$_POST['pro_id']:$pro_id="";
    isset($_POST['pro_date'])?$pro_date=$_POST['pro_date']:$pro_date="";
    isset($_POST['pro_nameTH'])?$pro_nameTH=$_POST['pro_nameTH']:$pro_nameTH="";
    isset($_POST['pro_nameEN'])?$pro_nameEN=$_POST['pro_nameEN']:$pro_nameEN="";
    isset($_POST['pro_detail'])?$pro_detail=$_POST['pro_detail']:$pro_detail="";

    $sql = "update project set pro_date='$pro_date', pro_nameTH='$pro_nameTH', pro_nameEN='$pro_nameEN', pro_detail='$pro_detail' where pro_id=$pro_id;";

    $mysqli->query($sql);
    // close connection
    $mysqli->close();
?>

<meta http-equiv="refresh" content="0; url=./project_show.php">