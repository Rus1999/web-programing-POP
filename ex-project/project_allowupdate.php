<?php
    session_start();
    // connection
    include("./sqliConnect.php");

    isset($_POST['pro_id'])?$pro_id=$_POST['pro_id']:$pro_id="";
    isset($_POST['status'])?$status=$_POST['status']:$status="";
    $boss_id = $_SESSION['id'];

    $sql = "update project set pro_status=$status, boss_id=$boss_id where pro_id=$pro_id;";
    echo $sql;
    $mysqli->query($sql);
    // close connection
    $mysqli->close();
?>

<meta http-equiv="refresh" content="0; url=./project_allow.php">