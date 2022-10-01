<?php
    session_start();
    // start connection
    include("./sqliConnect.php");

    $train_id = $_POST['train_id'];
    $train_status =$_POST['train_status'];
    $boss_id = $_SESSION['id'];

    $sql = "update train set train_status=$train_status, boss_id=$boss_id where train_id=$train_id;";
    $mysqli->query($sql);

    // close connection
    $mysqli->close();
?>

<meta http-equiv="refresh" content="0; url=./train_allow.php">