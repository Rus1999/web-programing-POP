<?php
    include("./header.php");
    include("./menu.php");
    // start connection
    include("./sqliConnect.php");
?>

<table width="90%" align="center">
    <tr>
        <td>
            <h3>อนุมัติโครงการ</h3>
            <table border="1">
                <tr>
                    <td>รหัส</td>
                    <td>วันที่</td>
                    <td>ชื่อการฝึกอบรม</td>
                    <td>ที่อยู่</td>
                    <td>วันเริ่มการฝึกอบรม</td>
                    <td>วันสิ้นสุดการฝึกอบรม</td>
                    <td>คนขอ</td>
                    <td>สถานะ</td>
                    <td>จัดการ</td>
                </tr>
                <?php
                    $sql = "select * from train,member where train.mem_id=member.mem_id;";
                    $result = $mysqli->query($sql);
                    while ($row = $result->fetch_assoc()){
                        $train_id = $row['train_id'];
                        $train_name = $row['train_name'];
                        $train_date = $row['train_date'];
                        $train_startdate = $row['train_startdate'];
                        $train_enddate = $row['train_enddate'];
                        $train_address = $row['train_address'];
                        $train_status = $row['train_status'];
                        $mem_id = $row['mem_id'];
                        $mem_fname = $row['mem_fname'];
                        $mem_lname = $row['mem_lname'];
                        $boss_id = $row['boss_id'];

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
                                <td>$train_startdate</td>
                                <td>$train_enddate</td>
                                <td>$mem_fname $mem_lname</td>
                                <td>$status</td>
                                <td><a href=\"./train_allowedit.php?train_id=$train_id\">จัดการ</a></td>
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