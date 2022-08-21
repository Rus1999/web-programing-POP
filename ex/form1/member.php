<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มรับค่าข้อมูล</title>
</head>
<body>
    <form name="frm" method="post" action="./pro_member.php" enctype="multipart/form-data">
        <!-- textbox -->
        TextBox: <input type="text" name="fname" placeholder="Please enter information"><br><br>

        <!-- password -->
        Password: <input type="password" name="password" placeholder="Please enter password"><br><br>

        <!-- textarea -->
        TextArea: <textarea name="address" cols="30" rows="5" placeholder="Address"></textarea><br><br>

        <!-- radio button -->
        Gender: <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female" checked>female<br><br>

        <!-- checkbox -->
        Select time to eat :
        <input type="checkbox" name="ck1" value="breakfast" checked>breakfast
        <input type="checkbox" name="ck2" value="lunch">lunch
        <input type="checkbox" name="ck3" value="dinner">dinner
        <br><br>

        <!-- drop down list -->
        Select food type :
        <select name="food">   
            <option value="Thai">Thai</option>
            <option value="Northeast">Northeast</option>
            <option value="Foriegn">Foriegn</option>
            <option value="Chinesse" selected>Chinesse</option>
        </select><br><br>

        <!-- file browse -->
        <input type="file" name="txtfile">

        <!-- submit button -->
        <input type="submit" name="submit" value="Process"> &nbsp;&nbsp;&nbsp;&nbsp;

        <!-- reset button -->
        <input type="reset" name="reset" value="clear"> 
        
        
    </form>
</body>
</html>