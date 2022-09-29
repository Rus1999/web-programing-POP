<?php
    // start session
    session_start();
    
    // initialize mySQL connection
    include("./sqliConnect.php");

    isset($_POST['pro_nameTH'])?$pro_nameTH=$_POST['pro_nameTH']:$pro_nameTH="";
    isset($_POST['pro_nameEN'])?$pro_nameEN=$_POST['pro_nameEN']:$pro_nameEN="";
    isset($_POST['pro_date'])?$pro_date=$_POST['pro_date']:$pro_date="";
    isset($_POST['pro_detail'])?$pro_detail=$_POST['pro_detail']:$pro_detail="";

    $pro_status = 1;
    $mem_id = $_SESSION['id'];
    $boss_id = 0;

    $sql = "insert into project values(null, '$pro_date', '$pro_nameTH', '$pro_nameEN', '$pro_detail', $mem_id, $boss_id, $pro_status);";
    echo "$sql";
    $mysqli->query($sql);

    // close connection
    $mysqli->close();
?>

<meta http-equiv="refresh" content="0; url=./project_show.php">