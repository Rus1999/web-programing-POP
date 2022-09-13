<?php
    include("./header.php");
    include("./menu.php");
    // initialize MySQL connection
    include("./sqliConnect.php");

?>

<table align="center" width="90%">
    <tr>
        <td>
            <h3>เพิ่มข้อมูลคำนำหน้าชื่อ</h3>
            <form action="./prefix_proadd.php" method="post">
                <table>
                    <tr>
                        <td>คำนำหน้าชื่อภาษาไทย</td>
                        <td><input type="text" name="prefix_nameTH"></td>
                    </tr>
                    <tr>
                        <td>คำนำหน้าชื่อภาษาอังกฤษ</td>
                        <td><input type="text" name="prefix_nameEN"></td>
                    </tr>
                    <tr>
                        <td><a href="./prefix_show.php" class="button-2">ยกเลิก</a></td>
                        <td><input type="submit" value="บันทึก" class="button-2"></td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>


<?php
    $mysqli->close();
    include("./footer.php"); 
?>