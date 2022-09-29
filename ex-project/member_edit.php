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
        $mprefix_id = $row['prefix_id'];
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
                        <?php
                            $st1 = "";
                            $st2 = "";
                            $st3 = "";
                            if ($mem_status=="1"){
                                $st1 = "checked";
                            }
                            else if($mem_status=="2"){
                                $st2 = "checked";
                            }else if($mem_status=="3"){
                                $st3 = "checked";
                            }
                        ?>
                        <td>
                            <input type="radio" name="mem_status" value="1" <?php echo $st1 ?>> ผู้ดูแลระบบ
                            <input type="radio" name="mem_status" value="2" <?php echo $st2 ?>> พนักงาน
                            <input type="radio" name="mem_status" value="3" <?php echo $st3 ?>> ผู้บริหาร
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
                                        
                                        $pr = "";
                                        if($mprefix_id==$prefix_id){
                                            $pr = "selected";
                                        }

                                        echo "
                                        <option value=\"$prefix_id\" $pr>$prefix_nameTH</option>
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