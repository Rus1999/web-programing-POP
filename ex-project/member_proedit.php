<?php
    // connection
    include("./sqliConnect.php");

    isset($_POST['mem_id'])?$mem_id=$_POST['mem_id']:$mem_id="";
    isset($_POST['mem_fname'])?$mem_fname=$_POST['mem_fname']:$mem_fname="";
    isset($_POST['mem_lname'])?$mem_lname=$_POST['mem_lname']:$mem_lname="";
    isset($_POST['mem_telephone'])?$mem_telephone=$_POST['mem_telephone']:$mem_telephone="";
    isset($_POST['mem_email'])?$mem_email=$_POST['mem_email']:$mem_email="";
    isset($_POST['mem_user'])?$mem_user=$_POST['mem_user']:$mem_user="";
    isset($_POST['mem_password'])?$mem_password=$_POST['mem_password']:$mem_password="";
    isset($_POST['mem_status'])?$mem_status=$_POST['mem_status']:$mem_status="";
    isset($_POST['prefix_id'])?$prefix_id=$_POST['prefix_id']:$prefix_id="";

    $sql = "update member set mem_fname='$mem_fname', mem_lname='$mem_lname', prefix_id='$prefix_id', mem_telephone='$mem_telephone', mem_email='$mem_email', mem_user='$mem_user', mem_password='$mem_password', mem_status='$mem_status' where mem_id='$mem_id';";
    echo $sql;
    $mysqli->query($sql);
    // close connection
    $mysqli->close();
?>

<meta http-equiv="refresh" content="0; url=./member_show.php">