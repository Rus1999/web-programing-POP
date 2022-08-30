<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณราคาอาหารบุฟเฟต์โออิฮิ</title>
</head>
<body>
    <h4>ระบบคำนวณราคาอาหารบุฟเฟต์โออิฮิ</h4>
    <form action="ReturnArray.php" method="post"> 
        กรุณาระบุราคาอาหารต่อคน: <input name="price" type="text">
        กรุณาระบุจำนวนลูกค้า: <input name="customer" type="text">
        <input name="submit" type="submit" value="ตกลง">
    </form>
    
    <?php
        function Calculator($value, $num)
        {
            $value = $num*$value;
            $Service = $value*10/100;
            $Tax = $value*7/100;
            $Total = $value+$Service+$Tax;
            return array($value, $Service, $Tax, $Total);
        }
        $price1 = $_POST['price'];
        $numcus = $_POST['customer'];
        $Bill = Calculator($price1, $numcus);
        echo "ราคาอาหาร: $Bill[0] บาท <br>";
        echo "ค่าบริการ: $Bill[1] บาท <br>";
        echo "ภาษีมูลค่าเพิ่ม 7%: $Bill[2] บาท <br>";
        echo "รวมเป็นเงินทั้งสิ้น: $Bill[3] บาท <br>"
    ?>

</body>
</html>