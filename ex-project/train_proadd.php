<?php
    session_start();
    // connection
    include("./sqliConnect.php");
    
    $train_date = $_POST['train_date'];
    $train_name = $_POST['train_name'];
    $train_address = $_POST['train_address'];
    $train_startdate = $_POST['train_startdate'];
    $train_enddate = $_POST['train_enddate'];
    $mem_id = $_SESSION['id'];
    $train_status = 1;

    $sql = "insert into train values(null, '$train_date', '$train_name', '$train_address', '$train_startdate', '$train_enddate', $mem_id, 0, $train_status);";
    echo $sql;
    $mysqli->query($sql);

    // close connection
    $mysqli->close();
?>

<meta http-equiv="refresh" content="0; url=./train_show.php">