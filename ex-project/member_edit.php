<?php
    include("./header.php");
    include("./menu.php");
    // connection
    include("./sqliConnect.php");

    isset($_GET['mem_id'])?$mem_id=$_GET['mem_id']:$mem_id="";

    $sql = "select * from member where mem_id='$mem_id';";
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
    }
?>

<table align="center" width="90%">
    <tr>
        <td>
            <h3>แก้ไขข้อมูลสมาชิก</h3>
        </td>
    </tr>
    <tr>
        <td>
            <form action="./member_proedit.php" method="post">
                <input type="hidden" name="mem_id" value="<?php echo "$mem_id" ?>">
                <table>
                    <tr>
                        <td>ชื่อ</td>
                        <td><input type="text" name="mem_fname" value="<?php echo "$mem_fname" ?>"></td>
                    </tr>
                    <tr>
                        <td>นามสกุล</td>
                        <td><input type="text" name="mem_lname" value="<?php echo "$mem_lname" ?>"></td>
                    </tr>
                    <tr>
                        <td>เบอร์โทรศัพท์</td>
                        <td><input type="text" name="mem_telephone" value="<?php echo "$mem_telephone" ?>"></td>
                    </tr>
                    <tr>
                        <td>อีเมล์</td>
                        <td><input type="email" name="mem_email" value="<?php echo "$mem_email" ?>"></td>
                    </tr>
                    <tr>
                        <td>ชื่อผู้ใช้งาน</td>
                        <td><input type="text" name="mem_user" value="<?php echo "$mem_user" ?>"></td>
                    </tr>
                    <tr>
                        <td>รหัสผ่าน</td>
                        <td><input type="text" name="mem_password" value="<?php echo "$mem_password" ?>"></td>
                    </tr>
                    <tr>
                        <td>สถานะ</td>
                        <td><input type="text" name="mem_status" value="<?php echo "$mem_status" ?>"></td>
                    </tr>
                    <tr>
                        <td>รหัสคำนำหน้าชื่อ</td>
                        <td><input type="text" name="prefix_id" value="<?php echo "$prefix_id" ?>"></td>
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
    // close connection
    $mysqli->close();
    include("./footer.php");
?>