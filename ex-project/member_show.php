<?php
    include("./header.php");
    include("./menu.php");
    // initialize connection
    include("./sqliConnect.php");
?>

<table width="90%" align="center">
    <tr>
        <td>
            <h3>จัดการสมาชิก</h3>
            <a href="./member_add.php">เพิ่มข้อมูลสมาชิก</a>
            <table border="1px">
                <tr>
                    <td>รหัส</td>
                    <td>ชื่อ</td>
                    <td>นามสกุล</td>
                    <td>เบอร์โทรศัพท์</td>
                    <td>อีเมล์</td>
                    <td>ชื่อผู้ใช้งาน</td>
                    <td>รหัสผ่าน</td>
                    <td>สถานะ</td>
                    <td>คำนำหน้าชื่อ</td>
                    <td>จัดการ</td>
                </tr>      
                <?php
                    $sql = "select * from member;";
                    $result = $mysqli->query($sql);

                    while($row = $result->fetch_assoc()){
                        $mem_id = $row['mem_id'];
                        $mem_fname = $row['mem_fname'];
                        $mem_lname = $row['mem_lname'];
                        $mem_telephone = $row['mem_telephone'];
                        $mem_email = $row['mem_email'];
                        $mem_user = $row['mem_user'];
                        $mem_password = $row['mem_password'];
                        $mem_status = $row['mem_status'];
                        $prefix_id = $row['prefix_id'];

                        echo "
                            <tr>
                                <td>$mem_id</td>
                                <td>$mem_fname</td>
                                <td>$mem_lname</td>
                                <td>$mem_telephone</td>
                                <td>$mem_email</td>
                                <td>$mem_user</td>
                                <td>$mem_password</td>
                                <td>$mem_status</td>
                                <td>$prefix_id</td>
                                <td>
                                    <a href=\"./member_edit.php?mem_id=$mem_id\">แก้ไข</a>
                                    |
                                    <a href=\"./member_delete.php?mem_id=$mem_id\">ลบ</a>
                                </td>
                            </tr>
                        ";
                    }
                ?>
            </table>
        </td>
    </tr>
</table>

<?php
    // close connection
    $mysqli->close();
    include("./footer.php");
?>