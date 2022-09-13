<?php
    include("./header.php");
    include("./menu.php");
    // initialize sqli connection
    include("./sqliConnect.php");

    // selectr row according to fac_id
    isset($_GET['fac_id'])?$fac_id=$_GET['fac_id']:$fac_id="";

    $sql = "select * from faculty where fac_id='$fac_id';";
    $result = $mysqli->query($sql);
    while($row = $result->fetch_assoc()){
        $fac_name = $row['fac_name'];
        $fac_detail = $row['fac_detail'];
    }
?>

<table align="center" width="90%">
    <tr>
        <td colspan="2"><h3>แก้ไขข้อมูลคณะ</h3></td>
    </tr>
    <form action="./faculty_proedit.php" method="post">
        <input type="hidden" name="fac_id" value="<?php echo "$fac_id" ?>">
        <tr>
            <td>ชื่อคณะ</td>
            <td><input type="text" name="fac_name" size="28" value="<?php echo "$fac_name" ?>"></td>
        </tr>   
        <tr>
            <td>รายละเอียด</td>
            <td><textarea name="fac_detail" cols="28" rows="5"><?php echo "$fac_detail" ?></textarea></td>
        </tr> 
        <tr>
            <td><a href="./faculty_show.php" class="button-2">ยกเลิก</a></td>
            <td><input type="submit" value="บันทึก" class="button-2"></td>
        </tr>
    </form>
    
</table>



<?php
    // close connection
    $mysqli->close();
    include("./footer.php");
?>