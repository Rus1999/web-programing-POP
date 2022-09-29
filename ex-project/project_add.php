<?php
    include("./header.php");
    include("./menu.php");
    // initialize mySQL connection
    include("./sqliConnect.php");
?>

<table width="90%" align="center">
    <tr>
        <td><h3>เพิ่มข้อมูลโครงงาน</h3></td>
        <form action="./project_proadd.php" method="post">
            <table>
                <tr>
                    <td>ชื่อโครงการภาษาไทย</td>
                    <td><input type="text" name="pro_nameTH"></td>
                </tr>
                <tr>
                    <td>ชื่อโครงการภาษาอังกฤษ</td>
                    <td><input type="text" name="pro_nameEN"></td>
                </tr>
                <tr>
                    <td>วันที่</td>
                    <td><input type="date" name="pro_date"></td>
                </tr>
                <tr>
                    <td>รายละเอียด</td>
                    <td><textarea name="pro_detail" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><a href="./project_show.php" class="button-2">ยกเลิก</a>
                    <input type="submit" value="บันทึก" class="button-2"></td>
                </tr>
            </table>
        </form>
    </tr>
</table>


<?php
    // close connection
    $mysqli->close();
    include("./footer.php");
?>