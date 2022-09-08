<!-- template -->
<!-- header -->
<?php
    include("./header.php");
?>

<!-- menu -->
<?php
    include("./menu.php");
?>

<table width="80%" border="0" align="center">
    <tr>
        <td>
            <h3>ฟอร์มจัดการคณะ</h3>
            <form action="./faculty_proadd.php" method="post">
            <table width="90%">
                <tr>
                    <td valign="top"> ชื่อคณะ</td>
                    <td valign="top"><input type="text" name="fac_name" size="30"></td>
                </tr>
                <tr>
                    <td valign="top"> รายละเอียด</td>
                    <td valign="top"><textarea name="fac_detail" rows="5" cols="29"></textarea></td>
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

<!-- footer -->
<?php
    include("./footer.php");
?>