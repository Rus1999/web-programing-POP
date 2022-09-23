<!-- menu -->
<td valign="top" height="700" width="14%" bgcolor="#f79797">
                
                เมนู : <?php 
                if(isset($_SESSION['status'])){
                    echo $_SESSION['fname']." ".$_SESSION['lname'];
                } 
                ?>
                <br>
                - <a href="./login.php">เข้าสู่ระบบ</a><br>
                - <a href="./regisform.php">สมัครสมาชิก</a><br>
                - <a href="./member.php">ฟอร์มผู้ใช้งานระบบ</a><br>
                - <a href="./ex3.php">สูตรคูณ</a><br>
                <hr>
                <?php 
                    if(isset($_SESSION['status'])!=""){
                        if($_SESSION['status']=="1")
                        echo "
                            - <a href=\"./faculty_show.php\">จัดการข้อมูลคณะ</a><br>
                            - <a href=\"./prefix_show.php\">จัดการคำนำหน้าชื่อ</a><br>
                            - <a href=\"./member_show.php\">จัดการข้อมูลสมาชิก</a><br>
                            - <a href=\"./logout.php\">ออกจากระบบ</a><br>
                        ";
                    
                        else if($_SESSION['status']=="2"){
                            echo "
                                - <a href=\"./logout.php\">ออกจากระบบ</a><br>
                            ";
                        }
                        else if($_SESSION['status']=="3"){
                            echo "
                                - <a href=\"./logout.php\">ออกจากระบบ</a><br>
                            ";
                        }
                    }
                ?>
            </td>
            <td valign="top">