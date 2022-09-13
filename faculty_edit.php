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
    isset($_GET['fac_id'])?$fac_id=$_GET['fac_id']:$fac_id="";

    $sql = "select * from faculty where fac_id='$fac_id'";
    $result = $mysqli->query($sql) or die($mysqli->error.__LINE__);
    $i=0;
    
    while($row=$result->fetch_array(MYSQLI_ASSOC)){
        $i=$i+1;
        $fac_id=$row["fac_id"];
        $fac_name=$row["fac_name"];
        $fac_detail=$row["fac_detail"];
    }
?>

<table width="80%" border="0" align="center">
    <tr>
        <td>
            <h3>ฟอร์มจัดการคณะ</h3>
            <form action="./faculty_proedit.php" method="post">
                <input type="hidden" name="fac_id" size="30" value="<?php echo $fac_id ?>">
            <table width="90%">
                <tr>
                    <td valign="top"> ชื่อคณะ</td>
                    <td valign="top"><input type="text" name="fac_name" size="30" value="<?php echo $fac_name ?>"></td>
                </tr>
                <tr>
                    <td valign="top"> รายละเอียด</td>
                    <td valign="top"><textarea name="fac_detail" rows="5" cols="29"><?php echo $fac_detail ?></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="right">
                        <button onlickonclick="history.go(-1);" value="ยกเลิก">ยกเลิก</button>
                        <input type="submit" value="บันทึก">
                    </td>
                </tr>
            </table>
            </form>
        </td>
    </tr>
</table>

</table>

<?php
    include("./footer.php");
?>