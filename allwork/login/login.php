<!-- login -->
<!-- header -->
<?php
    include("../../ex-project/header.php");
?>

<!-- menu -->
<?php
    include("../../ex-project/menu.php");
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
    include("../../ex-project/footer.php");
?>