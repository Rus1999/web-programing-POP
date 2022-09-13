<!-- sql initialize connection -->
<?php
    include("./sqliConnect.php");
?>

<?php
    isset($_POST['fac_name'])?$fac_name=$_POST['fac_name']:$fac_name="";
    isset($_POST['fac_detail'])?$fac_detail=$_POST['fac_detail']:$fac_detail="";

    $sql = "
    insert into faculty values('', '$fac_name', '$fac_detail');
    ";

    $mysqli->query($sql);
    
    // close connection
    $mysqli->close();
?>

<meta http-equiv="refresh" content="0; url=./faculty_show.php">