<?php
    include("./header.php");
    include("./menu.php");
    // connection
    include("./sqliConnect.php");
?>

<table align="center" width="90%">
    <tr>
        <td>
                <h3>จัดการข้อมูลคณะ</h3>
                <a href="faculty_add.php">เพิ่มข้อมูลคณะ</a>
        <table border="1px" >
            <tr>
                <td align="center" bgcolor="#f59c95">รหัสคณะ</td>
                <td align="center" bgcolor="#f59c95">ชื่อคณะ</td>
                <td align="center" bgcolor="#f59c95">รายละเอียด</td>
                <td align="center" bgcolor="#f59c95">จัดการ</td>
            </tr>
            
            <?php
                // select
                $sql = "select * from faculty";
                $result = $mysqli->query($sql);

                // display selected result
                if ($result->num_rows){
                    while($row = $result->fetch_assoc()){

                        $fac_id = $row['fac_id'];
                        $fac_name = $row['fac_name'];
                        $fac_detail = $row['fac_detail'];

                        echo " 
                        <tr>
                            <td>$fac_id</td>
                            <td>$fac_name</td>
                            <td>$fac_detail</td>
                            <td>
                                <a href=\"faculty_edit.php?fac_id=$fac_id\">แก้ไข</a>
                                |
                                <a href=\"faculty_delete.php?fac_id=$fac_id\">ลบ</a>
                            </td>
                        </tr>
                        ";
                    }
                }
                else {
                    echo "no results";
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