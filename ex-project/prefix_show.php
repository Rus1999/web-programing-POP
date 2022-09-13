<?php
    include("./header.php");
    include("./menu.php");
    // initialize MySQL connection
    include("./sqliConnect.php");

?>

<table align="center" width="90%">
    <tr>
        <td>
            <h3>จัดการคำนำหน้าชื่อ</h3>
        </td>
    </tr>
    <tr>
        <td><a href="./prefix_add.php">เพิ่มข้อมูลคำนำหน้าชื่อ</a></td>
    </tr>
    <tr>
        <td>
            <table border="1px">
                <tr>
                    <td align="center">รหัส</td>
                    <td align="center">คำนำหน้าชื่อภาษาไทย</td>
                    <td align="center">คำนำหน้าชื่อภาษาอังกฤษ</td>
                    <td align="center">จัดการ</td>
                </tr>
                <tr>
                    <?php
                        // select all data in prefixS
                        $sql = "select * from prefix;";
                        // query the sql command
                        $result = $mysqli->query($sql);
                        while ($row = $result->fetch_assoc()){
                            $prefix_id = $row['prefix_id'];
                            $prefix_nameTH = $row['prefix_nameTH'];
                            $prefix_nameEN = $row['prefix_nameEN'];
                            
                            echo "
                                <tr>
                                    <td>$prefix_id</td>
                                    <td>$prefix_nameTH</td>
                                    <td>$prefix_nameEN</td>
                                    <td><a href=\"./prefix_edit.php?prefix_id=$prefix_id\">แก้ไข</a>
                                    |
                                    <a href=\"./prefix_delete.php?prefix_id=$prefix_id\">ลบ</a></td>
                                </tr>
                            ";
                        }
                    ?>
                </tr>
            </table>
        </td>
    </tr>
</table>

<?php
    // close connection
    $mysqli->close();
    include("./footer.php");
?>