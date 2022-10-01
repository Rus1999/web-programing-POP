<?php
    include("./header.php");
    include("./menu.php");
    // initialize mySQL connection
    include("./sqliConnect.php");
?>

<table width="90%" align="center">
    <tr>
        <td>
            <h3>จัดการคำขอไปฝึกอบรม</h3>
            <a href="./train_add.php">เพิ่มคำขอไปฝึกอบรม</a>
            <table border="1">
                <tr>
                    <td>รหัส</td>
                    <td>วันที่</td>
                    <td>ชื่อการฝึกอบรม</td>
                    <td>ที่อยู่</td>
                    <td>สถานะ</td>
                    <td>จัดการ</td>
                </tr>
                <?php
                    $sql = "select * from train where mem_id=".$_SESSION['id'].";";
                    $result = $mysqli->query($sql);
                    while ($row = $result->fetch_assoc()){
                        $train_id = $row['train_id'];
                        $train_date = $row['train_date'];
                        $train_name = $row['train_name'];
                        $train_address = $row['train_address'];
                        $train_startdate = $row['train_startdate'];
                        $train_enddate = $row['train_enddate'];
                        $mem_id = $row['mem_id'];
                        $boss_id = $row['boss_id'];
                        $train_status = $row['train_status'];

                        $status = "";
                        if ($train_status == 1){
                            $status = "รออนุมัติ";
                        }else if ($train_status == 2){
                            $status = "อนุมัติ";
                        }else if ($train_status == 3){
                            $status = "ไม่อนุมัติ";
                        }

                        echo "
                            <tr>
                                <td>$train_id</td>
                                <td>$train_date</td>
                                <td>$train_name</td>
                                <td>$train_address</td>
                                <td>$status</td>
                        ";
                        if ($train_status == 1){
                            echo "
                                <td><a href=\"./train_edit.php?train_id=$train_id\">แก้ไข</a>
                                |
                                <a href=\"./train_delete.php?train_id=$train_id\">ลบ</a>
                            ";
                        }else {

                        }
                        echo "
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