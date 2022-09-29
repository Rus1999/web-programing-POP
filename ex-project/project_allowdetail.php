<?php
    include("./header.php");
    include("./menu.php");
    // initialize MySQL connection
    include("./sqliConnect.php");

    isset($_GET['pro_id'])?$pro_id=$_GET['pro_id']:$pro_id="";
?>

<table width="90%" align="center">
    <tr>
        <td>
            <h3>จัดการโครงงาน</h3>
            <a href="./project_add.php">เพิ่มข้อมูลโครงงาน</a>
            <table border="1">
                <tr>
                    <td>รหัส</td>
                    <td>ชื่อโครงการภาษาไทย</td>
                    <td>ชื่อโครงการภาษาอังกฤษ</td>
                    <td>วันที่</td>
                    <td>เจ้าของโครงการ</td>
                    <td>สถานะ</td>
                <?php
                    $sql = "select * from project,member where project.mem_id=member.mem_id and pro_id=$pro_id;";
                    $result = $mysqli->query($sql);
                    while($row = $result->fetch_assoc()){
                        $pro_id = $row['pro_id'];
                        $pro_nameTH = $row['pro_nameTH'];
                        $pro_nameEN = $row['pro_nameEN'];
                        $pro_date = $row['pro_date'];
                        $pro_detail = $row['pro_detail'];
                        $mem_id = $row['mem_id'];
                        $boss_id = $row['boss_id'];
                        $pro_status = $row['pro_status'];
                        $mem_fname= $row['mem_fname'];
                        $mem_lname= $row['mem_lname'];
                        
                        $status = "";
                        if ($pro_status == "1"){
                            $status = "รออนุมัติ";
                        }else if ($pro_status == "2"){
                            $status = "อนุมติ";
                        }else if ($pro_status == "3"){
                            $status = "ไม่อนุมัติ";
                        }
                        
                        echo "
                            <tr>
                                <td>$pro_id</td>
                                <td>$pro_nameTH</td>
                                <td>$pro_nameEN</td>
                                <td>$pro_date</td>
                                <td>$mem_fname  $mem_lname</td>
                                <td>$status</td>
                            </tr>
                        ";

                    }
                ?>
            </table>
            <br><br>
            <table width="80%">
                <tr>
                    <td width="30%">ชื่อโครงการภาษาไทย</td>
                    <td><?php echo $pro_nameTH ?></td>
                </tr>
                <tr>
                    <td width="30%">ชื่อโครงการภาษาอังกฤษ</td>
                    <td><?php echo $pro_nameEN ?></td>
                </tr>
                <tr>
                    <td width="30%">วันที่</td>
                    <td><?php echo $pro_date ?></td>
                </tr>
                <tr>
                    <td width="30%">เจ้าของโครงการ</td>
                    <td><?php echo "$mem_fname  $mem_fname" ?></td>
                </tr>
                <tr>
                    <td width="30%">รายละเอียด</td>
                    <td><?php echo $pro_detail ?></td>
                </tr>
            </table>
            <br><br>
            <form action="./project_allowupdate.php" method="post">
                <input type="hidden" name="pro_id" value="<?php echo $pro_id; ?>">
                <select name="status">
                    <option value="1">รออนุมัติ</option>
                    <option value="2">อนุมัติ</option>
                    <option value="3">ไม่อนุมัติ</option>
                </select>
                <a href="./project_allow.php" class="button-2">ยกเลิก</a>
                <input type="submit" value="บันทึก" class="button-2">
            </form>
        </td>
    </tr>

</table>

<?php
    // close connection
    $mysqli->close();
    include("./footer.php");
?>