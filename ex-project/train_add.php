<?php
    include("./header.php");
    include("./menu.php");
    // connection
    include("./sqliConnect.php");
?>

<table>
    <tr>
        <td>
            <h3>เพิ่มคำขอไปฝึกอบรม</h3>
            <form action="./train_proadd.php" method="post">
                <table>
                    <tr>
                        <td>วันที่</td>
                        <td><input type="date" name="train_date"></td>
                    </tr>
                    <tr>
                        <td>ชื่อการฝึกอบรม</td>
                        <td><input type="text" name="train_name"></td>
                    </tr>
                    <tr>
                        <td>ที่อยู่</td>
                        <td><textarea name="train_address" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td>วันเริ่มการฝึกอบรม</td>
                        <td><input type="date" name="train_startdate"></td>
                    </tr>
                    <tr>
                        <td>วันสิ้นสุดการฝึกอบรม</td>
                        <td><input type="date" name="train_enddate"></td>
                    </tr>
                    <tr>
                        <td><a href="./train_show.php" class="button-2">ยกเลิก</a></td>
                        <td><input type="submit" value="บันทึก" class="button-2"></td>
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