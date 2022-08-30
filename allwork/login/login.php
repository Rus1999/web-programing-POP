<!-- login -->
<!-- header -->
<?php
    include("../../../webapp/ex-project/template/header.php");
?>

<!-- menu -->
<?php
    include("../../../webapp/ex-project/template/menu.php");
?>

<!-- content -->
<table>
    <tr>
        <td>
            รหัสผู้ใช้งาน
        </td>
        <td>
            <input type="text" name="user">
        </td>
    </tr>
    <tr>
        <td>
            รหัสผ่าน
        </td>
        <td>
            <input type="password" name="password">
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" value="เข้าสู่ระบบ">
        </td>
    </tr>
</table>

<!-- footer -->
<?php
    include("../../../webapp/ex-project/template/footer.php");
?>