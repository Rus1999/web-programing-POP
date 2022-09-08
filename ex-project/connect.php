<!-- template -->
<!-- header -->
<?php
    include("./header.php");
?>

<!-- menu -->
<?php
    include("./menu.php");
?>

<?php
    $mysqli = new mysqli("localhost", "root", "", "webproject");
    if (mysqli_connect_error()) {
        echo "Failed to connect to MySQL:".mysqli_connect_error();
    }
    $mysqli->query("SET NAMES utf8");
?>
<?php
    $sql = "select * from faculty";
    $result = $mysqli->query($sql) or die($mysqli->error.__LINE__);
    $i=0;
    
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        $i = $i+1;
        $fac_id = $row["fac_id"];
        $fac_name = $row["fac_name"];
        $fac_detail = $row["fac_detail"];

        echo "$fac_id $fac_name $fac_detail";
        echo "<br>";
    }

    $mysqli->close();
?>

<!-- footer -->
<?php
    include("./footer.php");
?>