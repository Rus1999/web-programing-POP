<?php
    include("./header.php");
    include("./menu.php");
    // start connection
    include("./sqliConnect.php");

    $train_id = $_GET['train_id'];

    $sql = "select * from train,member where train.mem_id=member.mem_id and train_id=$train_id;";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    $train_date = $row['train_date'];
    $train_name = $row['train_name'];
    $train_address = $row['train_address'];
    $train_startdate = $row['train_startdate'];
    $train_enddate = $row['train_enddate'];
    $mem_id = $row['mem_id'];
    $boss_id = $row['boss_id'];
    $train_status = $row['train_status'];
    $mem_fname = $row['mem_fname'];
    $mem_lname = $row['mem_lname'];

    $status1 = "";
    $status2 = "";
    $status3 = "";

    if ($train_status == 1){
        $status1 = "selected";
    }else if ($train_status == 2){
        $status2 = "selected";
    }else if ($train_status == 3){
        $status3 = "selected";
    }
?>

<table width="90%" align="center">
    <tr>
        <td>
            <h3>อนุมัติโครงการ</h3>
            <table>
                <tr>
                    <td>รหัส</td>
                    <td><?php echo "$train_id"; ?></td>
                </tr>
                <tr>
                    <td>ชื่อการฝึกอบรม</td>
                    <td><?php echo "$train_name"; ?></td>
                </tr>
                <tr>
                    <td>วันที่</td>
                    <td><?php echo "$train_date"; ?></td>
                </tr>
                <tr>
                    <td>วันเริ่มการฝึกอบรม</td>
                    <td><?php echo "$train_startdate"; ?></td>
                </tr>
                <tr>
                    <td>วันสิ้นสุดการฝึกอบรม</td>
                    <td><?php echo "$train_enddate"; ?></td>
                </tr>
                <tr>
                    <td>ที่อยู่</td>
                    <td><?php echo "$train_address"; ?></td>
                </tr>
                <tr>
                    <td>คนขอ</td>
                    <td><?php echo "$mem_fname $mem_lname"; ?></td>
                </tr>
                <form action="./train_allowupdatestatus.php" method="post">
                    <tr>
                        <input type="hidden" name="train_id" value="<?php echo "$train_id";?>">
                        <td>จัดการ</td>
                        <td>
                            <select name="train_status">
                                <option value="1" $status1>รออนุมัติ</option>
                                <option value="2" $status2>อนุมติ</option>
                                <option value="3" $status3>ไม่อนุมัติ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="./train_allow.php" class="button-2">ยกเลิก</a></td>
                        <td><input type="submit" value="บันทึก"></td>
                    </tr>
                </form>

            </table>
        </td>
    </tr>
</table>

<?php
    // close connection
    $mysqli->query($sql);
    include("./footer.php");
?>