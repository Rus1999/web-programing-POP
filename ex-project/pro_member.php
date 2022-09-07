<!-- header -->
<?php
    include("../../../webapp/ex-project/template/header.php");
?>

<!-- menu -->
<?php
    include("../../../webapp/ex-project/template/menu.php");
?>

<?php
    // receiving the text from textbox['fname'] into the $fname
    $fname=$_POST['fname'];
    // receiving the text from password['password'] into the $password
    $password=$_POST['password'];
    // receiving the text from textarea['address'] into $textarea
    $textarea=$_POST['address'];
    // receving the choice from radiobutton['gender'] into $gender
    $gender=$_POST['gender'];
    // receving the result from checkbox['ck1..ck3'] into $ck1..$ck3
    $ck1=$_POST['ck1'];
    $ck2=$_POST['ck2'];
    $ck3=$_POST['ck3'];
    // receving the choice from food['food'] into $food
    $food=$_POST['food'];
    // receving the file from['textfile']
    $textfile_name=$_FILES['txtfile']['name'];
    $textfile_type=$_FILES['txtfile']['type'];
    $textfile_size=$_FILES['txtfile']['size'];
    $textfile_tempname=$_FILES['txtfile']['tmp_name'];

    // echo fname
    echo "Textbox : $fname <br><br>";
    // echo password
    echo "Password: $password <br><br>";
    // echo textarea
    echo "TextArea: $textarea <br><br>";
    // echo gender
    echo "Gender: $gender <br><br>";
    // echo checkbox
    echo "ck1: $ck1 <br><br>";
    echo "ck2: $ck2 <br><br>";
    echo "ck3: $ck3 <br><br>";
    // echo food
    echo "food: $food <br><br>";
    // echo file
    echo "file_name: $textfile_name <br>";
    echo "file_type: $textfile_type <br>";
    echo "file_size: $textfile_size <br>";
    echo "file_tempName: $textfile_tempname <br>";
    ?>

<!-- footer -->
<?php
    include("../../../webapp/ex-project/template/footer.php");
?>