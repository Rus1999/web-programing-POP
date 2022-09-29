<?php
    include("./header.php");
    include("./menu.php");
    // initialize mySQL connection
    include("./sqliConnect.php");

    isset($_GET['pro_id'])?$pro_id=$_GET['pro_id']:$pro_id="";

    $sql = "select * from project where pro_id=$pro_id;";
    $result = $mysqli->query($sql);

    $row = $result->fetch_assoc();
    $pro_id = $row['pro_id'];
    $pro_date = $row['pro_date'];
    $pro_nameTH = $row['pro_nameTH'];
    $pro_nameEN = $row['pro_nameEN'];
    $pro_detail = $row['pro_detail'];
?>

<table width="90%" align="center">
    <tr>
        <td>
            <h3>แก้ไขข้อมูลโครงงาน</h3>
        </td>
    </tr>
    <form action="./project_proedit.php" method="post">
        <table>
            <tr>
                <td><input type="hidden" name="pro_id" value="<?php echo $pro_id ?>"></td>
            </tr>
            <tr>
                <td>วันที่</td>
                <td><input type="date" name="pro_date" value="<?php echo $pro_date ?>"></td>
            </tr>
            <tr>
                <td>ชื่อโครงการภาษาไทย</td>
                <td><input type="text" name="pro_nameTH" value="<?php echo $pro_nameTH ?>" size="50"></td>
            </tr>
            <tr>
                <td>ชื่อโครงการภาษาอังกฤษ</td>
                <td><input type="text" name="pro_nameEN" value="<?php echo $pro_nameEN ?>" size="50"></td>
            </tr>
            <tr>
                <td>รายละเอียดโครงงาน</td>
                <td><textarea name="pro_detail" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><a href="./project_show.php" class="button-2">ยกเลิก</a></td>
                <td><input type="submit" value="บันทึก" class="button-2"></td>
            </tr>
        </table>
    </form>

</table>

<?php
    // close connection 
    $mysqli->close();

    include("./footer.php");
?>