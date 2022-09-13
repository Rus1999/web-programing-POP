<?php
    include("./header.php");
?>
<?php
    include("./menu.php");
?>

<!-- connection -->
<?php
    $mysqli = new mysqli("localhost", "root", "", "webproject");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL:".mysqli_connect_error();
    }
    $mysqli->query("SET NAMES utf8");
?>

<?php
    isset($_POST['fac_name'])?$fac_name=$_POST['fac_name']:$fac_name="";
    isset($_POST['fac_detail'])?$fac_detail=$_POST['fac_detail']:$fac_detail="";

    $sql = "
    insert into faculty values('', '$fac_name', '$fac_detial');
    ";
    $mysqli->query($sql) or die($mysqli->error.__LINE__);
?>



<meta http-equiv="refresh" content="0; url=./faculty_show.php">

<?php
    include("./footer.php");
?>