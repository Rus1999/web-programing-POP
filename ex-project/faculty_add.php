<?php
    include("./header.php");
    include("./menu.php");
?>

<table align="center" width="90%">
    <tr>
        <td>
            <h3>เพิ่มข้อมูลคณะ</h3>
            <!-- form -->
            <form action="faculty_proadd.php" method="post">
                <table>
                    <tr>
                        <td>ชื่อคณะ </td>
                        <td><input type="text" name="fac_name" size="25"></td>
                    </tr>
                    <tr>
                        <td>รายละเอียด</td>
                        <td><textarea name="fac_detail" cols="25" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td><a href="./faculty_show.php" class="button-2">ยกเลิก</a></td>
                        <td><input type="submit" value="บันทึก" class="button-2"></td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>

<?php
    include("./footer.php");
?>