<?php
    session_start();
    // initialize connection
    include("./sqliConnect.php");


    isset($_POST['user'])?$user=$_POST['user']:$user="";
    isset($_POST['password'])?$password=$_POST['password']:$password="";

    echo "$user : $password";

    $sql = "select * from member where mem_user='$user';";
    $result = $mysqli->query($sql);

    // check if user is exists
    if ($row = $result->fetch_assoc()){
        $mem_id = $row['mem_id'];
        $mem_fname = $row['mem_fname'];
        $mem_lname = $row['mem_lname'];
        $mem_telephone = $row['mem_telephone'];
        $mem_email = $row['mem_email'];
        $mem_user = $row['mem_user'];
        $mem_password = $row['mem_password'];
        $mem_status = $row['mem_status'];
        $prefix_id = $row['prefix_id'];


        if($password==$mem_password){
            echo "
                <tr>
                    <td>$mem_id</td>
                    <td>$mem_fname</td>
                    <td>$mem_lname</td>
                    <td>$mem_telephone</td>
                    <td>$mem_email</td>
                    <td>$mem_user</td>
                    <td>$mem_password</td>
                    <td>$mem_status</td>
                    <td>$prefix_id</td>
                </tr>
            ";
            $_SESSION['fname']=$mem_fname;
            $_SESSION['lname']=$mem_lname;
            $_SESSION['id']=$mem_id;
            $_SESSION['status']=$mem_status;
            echo "<meta http-equiv=\"refresh\" content=\"0; url=./login.php\">";
        }else {
            echo "$user : $password";
            echo "<meta http-equiv=\"refresh\" content=\"0; url=./login.php?err=passwordIncorrect\">";
        }
    }else {
        echo "user not found";
        echo "<meta http-equiv=\"refresh\" content=\"0; url=./login.php?err=userNotFound\">";
    }


    // close connection
    $mysqli->close();
?>