<?php
    include("./header.php");
    include("./menu.php");
    // initialize connection
    include("./sqliConnect.php");
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
                        <td>
                            <input type="radio" name="mem_status" value="1"> ผู้ดูแลระบบ
                            <input type="radio" name="mem_status" value="2"> พนักงาน
                            <input type="radio" name="mem_status" value="3"> ผู้บริหาร
                        </td>
                    </tr>
                    <tr>
                        <td>คำนำหน้าชื่อ</td>
                        <td>
                            <select name="prefix_id">
                                <?php
                                    $sql = "select * from prefix";
                                    $result = $mysqli->query($sql);

                                    while ($row = $result->fetch_assoc()){
                                        $prefix_id= $row['prefix_id'];
                                        $prefix_nameTH= $row['prefix_nameTH'];
                                        $prefix_nameEN= $row['prefix_nameEN'];
                                        
                                        echo "
                                        <option value=\"$prefix_id\">$prefix_nameTH</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </td>

                        
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