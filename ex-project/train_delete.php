<?php
    // start connection
    include("./sqliConnect.php");

    $train_id = $_GET['train_id'];

    $sql = "delete from train where train_id=$train_id;";
    $mysqli->query($sql);
    // close connection
    $mysqli->close();
?>

<meta http-equiv="refresh" content="0; url=./train_show.php">