<?php
    include("./header.php");
    include("./menu.php");
    // initialize MySQL connection
    include("./sqliConnect.php");

    isset($_GET['prefix_id'])?$prefix_id=$_GET['prefix_id']:$prefix_id="";

    $sql = "select * from prefix where prefix_id='$prefix_id';";
    $result = $mysqli->query($sql);

    while($row = $result->fetch_assoc()){
        $prefix_nameTH = $row['prefix_nameTH'];
        $prefix_nameEN = $row['prefix_nameEN'];
    }
?>

<table align="center" width="90%">
    <tr>
        <td>
            <h3>แก้ไขข้อมูลคำนำหน้าชื่อ</h3>
            <form action="./prefix_proedit.php" method="post">
                <table>
                    <input type="hidden" name="prefix_id" value="<?php echo "$prefix_id" ?>">
                    <tr>
                        <td>คำนำหน้าชื่อภาษาไทย</td>
                        <td><input type="text" name="prefix_nameTH" value="<?php echo "$prefix_nameTH"; ?> "></td>
                    </tr>
                    <tr>
                        <td>คำนำหน้าชื่อภาษาอังกฤษ</td>
                        <td><input type="text" name="prefix_nameEN" value="<?php echo "$prefix_nameEN"; ?> "></td>
                    </tr>
                    <tr>
                        <td><a href="./prefix_show.php" class="button-2">ยกเลิก</a></td>
                        <td><input type="submit" value="บันทึก" class="button-2"></td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>


<?php
    $mysqli->close();
    include("./footer.php");
?>