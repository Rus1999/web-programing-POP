<!-- template -->
<!-- header -->
<?php
    include("./header.php");
?>

<!-- menu -->
<?php
    include("./menu.php");
?>

<table width="80%" border="0" align="center">
    <tr>
        <td>
            <h3>จัดการข้อมูลคณะ</h3>
            <a href="./faculty_add.php">เพิ่มข้อมูล</a>

            <!-- connection -->
            <?php
                $mysqli = new mysqli("localhost", "root", "", "webproject");
                if (mysqli_connect_errno()){
                    echo "Failed to connect to MySQL:".mysqli_connect_error();
                }
                $mysqli->query("SET NAMES utf8");
            ?>
            
            <!-- display -->
            <table width="90%" border="1">
                <tr bgcolor="#808080">
                    <td align="center">รหัส</td>
                    <td align="center">ชื่อคณะ</td>
                    <td align="center">รายละเอียด</td>
                    <td align="center">จัดการ</td>
                </tr>

            
            <?php
                $sql = "select * from faculty";
                $result = $mysqli->query($sql) or die($mysqli->error.__LINE__);
                $i=0;
                
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                    $i = $i+1;
                    $fac_id = $row["fac_id"];
                    $fac_name = $row["fac_name"];
                    $fac_detail = $row["fac_detail"];

                    echo "<tr>";
                    echo "<td>$fac_id</td> <td>$fac_name</td> <td>$fac_detail</td>
                    <td><a href=\"./faculty_edit.php?fac_id=$fac_id\">แก้ไข</a> 
                    | <a href=\"./faculty_delete.php?fac_id=$fac_id\">ลบ</a></td>";
                    echo "</tr>";
                    echo "<br>";
                }
                
                $mysqli->close();
             ?>
             </table>
        </td>
    </tr>
</table>

</table>

<!-- footer -->
<?php
    include("./footer.php");
?>