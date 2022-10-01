<?php
    include("./header.php");
    include("./menu.php");
    // connection
    include("./sqliConnect.php");
    if(isset($_GET['err'])){
        $streer=$_GET['err'];
    }else {
        $streer="";
    }

    if(isset($_SESSION['status'])!=""){
        echo $_SESSION['fname']." ".$_SESSION['lname'];
    }else {
?>

<!-- content -->
<table align="center">
    <tr>
        <td>
            <h3>เข้าสู่ระบบ</h3>
        </td>
    </tr>
    <form action="./checklogin.php" method="post">
        <tr>
            
            <td colspan>
                รหัสผู้ใช้งาน
            </td>
            <td>
                <input type="text" name="user">
            </td>
        </tr>
        <tr>
            <td>
                รหัสผ่าน
            </td>
            <td>
                <input type="password" name="password">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="เข้าสู่ระบบ">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <font color="red"><?php echo $streer; ?></font>
            </td>
        </tr>
    </form>
</table>


<?php
    }
    include("./footer.php");
?>