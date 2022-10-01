<?php
    session_start();
    // connection
    include("./sqliConnect.php");

    $train_id = $_POST['train_id'];
    $train_date = $_POST['train_date'];
    $train_name = $_POST['train_name'];
    $train_address = $_POST['train_address'];
    $train_startdate = $_POST['train_startdate'];
    $train_enddate = $_POST['train_enddate'];

    $sql = "update train set train_name='$train_name', train_date='$train_date', train_address='$train_address', train_startdate='$train_startdate', train_enddate='$train_enddate' where train_id=$train_id;";
    // echo "$sql";
    $mysqli->query($sql);

    // close conneciton
    $mysqli->close();
?>

<meta http-equiv="refresh" content="0; url=./train_show.php">