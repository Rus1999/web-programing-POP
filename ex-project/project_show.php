<?php
    include("./header.php");
    include("./menu.php");
    // initialize MySQL connection
    include("./sqliConnect.php");
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
                    <td>สถานะ</td>
                    <td>จัดการ</td>
                <?php
                    $sql = "select * from project where mem_id=".$_SESSION['id'].";";
                    $result = $mysqli->query($sql);
                    while($row = $result->fetch_assoc()){
                        $pro_id = $row['pro_id'];
                        $pro_nameTH = $row['pro_nameTH'];
                        $pro_nameEN = $row['pro_nameEN'];
                        $pro_date = $row['pro_date'];
                        $mem_id = $row['mem_id'];
                        $boss_id = $row['boss_id'];
                        $pro_status = $row['pro_status'];
                        
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
                                <td>$status</td>
                            ";
                            if ($pro_status == "2") {

                            } else if ($pro_status == "1"){
                                echo "
                                    <td>
                                        <a href=\"./project_edit.php?pro_id=$pro_id\">แก้ไข</a>
                                        |
                                        <a href=\"./project_delete.php?pro_id=$pro_id\">ลบ</a>
                                    </td>
                                ";
                            }
                        
                        echo "</tr>";
                        

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