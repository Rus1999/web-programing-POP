<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณส่วนลดสำหรับ 8To12 shop</title>
</head>
<body>
    <form action="discount.php" method="post">
        กรุณาระบุราคาสินค้า: <input name="price" type="text">
        กรุณาระบุประเภทลูกค้า: <select name="customer">
            <option value="1">ลูกค้าทั่วไป</option>
            <option value="2">สมาชิก</option>
            <option value="3">ลูกค้า VIP</option>
        </select>
        <input name="submit" type="submit" value="ตกลง">
    </form>
    <?php
        function CheckPrice($pr, $cs)
        {
            switch($cs)
            {
                case 1: return $pr;
                case 2: return $pr*0.95;
                case 3: return $pr*0.90;
                defalut: echo "กรุณาระบุราคา  และประเภทลูกค้า ค่ะ";
            }
        }
        $price = $_POST['price'];
        $cust = $_POST['customer'];
        $disprice = CheckPrice($price, $cust);
        echo "ราคาดแล้วเหลือ: $disprice บาท"
    ?>
</body>
</html>