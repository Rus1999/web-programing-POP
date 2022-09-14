<?php
    include("./header.php");
    include("./menu.php");
?>

<table align="center" width="90%">
    <tr>
        <td>
            <h3>เพิ่มช้อมูลสมาชิก</h3>
        </td>
    </tr>
    <tr>
        <td>
            <form action="./member_proadd.php" method="post">
                <table>
                    <tr>
                        <td>ชื่อ</td>
                        <td><input type="text" name="mem_fname"></td>
                    </tr>
                    <tr>
                        <td>นามสกุล</td>
                        <td><input type="text" name="mem_lname"></td>
                    </tr>
                    <tr>
                        <td>เบอร์โทรศัพท์</td>
                        <td><input type="text" name="mem_telephone"></td>
                    </tr>
                    <tr>
                        <td>อีเมล์</td>
                        <td><input type="email" name="mem_email"></td>
                    </tr>
                    <tr>
                        <td>ชื่อผู้ใช้งาน</td>
                        <td><input type="text" name="mem_user"></td>
                    </tr>
                    <tr>
                        <td>รหัสผ่าน</td>
                        <td><input type="text" name="mem_password"></td>
                    </tr>
                    <tr>
                        <td>สถานะ</td>
                        <td><input type="text" name="mem_status"></td>
                    </tr>
                    <tr>
                        <td>รหัสคำนำหน้าชื่อ</td>
                        <td><input type="text" name="prefix_id"></td>
                    </tr>
                    <tr>
                        <td><a href="./member_show.php" class="button-2">ยกเลิก</a></td>
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