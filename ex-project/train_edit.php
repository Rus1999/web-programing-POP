<?php
    include("./header.php");
    include("./menu.php");
    // start connectio
    include("./sqliConnect.php");

    $train_id = $_GET['train_id'];

    $sql = "select * from train where train_id=$train_id;";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    $train_date = $row['train_date'];
    $train_name = $row['train_name'];
    $train_address = $row['train_address'];
    $train_startdate = $row['train_startdate'];
    $train_enddate = $row['train_enddate'];
?>

<table width="90%" align="center">
    <tr>
        <td>
            <h3>แก้ไขคำขอไปฝึกอบรม</h3>
            <form action="./train_proedit.php" method="post">
                <table>
                    <tr>
                        <input type="hidden" name="train_id" value="<?php echo "$train_id" ?>">
                        <td>วันที่</td>
                        <td><input type="date" name="train_date" value="<?php echo "$train_date" ?>"></td>
                    </tr>
                    <tr>
                        <td>ชื่อการฝึกอบรม</td>
                        <td><input type="text" name="train_name" value="<?php echo "$train_name"?>"></td>
                    </tr>
                    <tr>
                        <td>ที่อยู่</td>
                        <td><textarea name="train_address" cols="30" rows="10"><?php echo "$train_address" ?></textarea></td>
                    </tr>
                    <tr>
                        <td>วันเริ่มการฝึกอบรม</td>
                        <td><input type="date" name="train_startdate" value="<?php echo "$train_startdate" ?>"></td>
                    </tr>
                    <tr>
                        <td>วันสิ้นสุดการฝึกอบรม</td>
                        <td><input type="date" name="train_enddate" value="<?php echo "$train_enddate" ?>"></td>
                    </tr>
                    <tr>
                        <td><a href="./train_show.php" class="button-2">ยกเลิก</a></td>
                        <td><input type="submit" value="บันทึก"></td>
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