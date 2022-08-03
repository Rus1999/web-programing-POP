<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณค่าคอมมิชชั่น ขายตรง บริษัท แอมเรย์ จำกัด</title>
</head>
<body>
    <form action="commission.php" method="post">
        กรุณาระบุยอดขายสบู่เหลว: <input name="soap" type="text"><br>
        กรุณาระบุยอดขายยาสีฟัน: <input name="toothpaste" type="text"><br>
        กรุณาระบุยอดขายโฟมล้างหน้า: <input name="facialfoam" type="text"><br>
        <input name="submit" type="submit" value="ตกลง">
    </form>
    
    <?php
        function comAmpRay($sale)
        {
            if($sale < 10000)
                return 0*$sale;
            else if($sale >= 10000 && $sale < 50000)
                return 0.05*$sale;
            else 
                return 0.10*$sale;
        }

        
        $sp = $_POST["soap"];
        $tp = $_POST["toothpaste"];
        $ff = $_POST["facialfoam"];

        // isset( $_POST['soap'] ) ? $sp = $_POST['soap'] : $a = "";
        // isset( $_POST['toothpaste'] ) ? $tp = $_POST['toothpaste'] : $a = "";
        // isset( $_POST['facialfoam'] ) ? $ff = $_POST['facialfoam'] : $a = "";

        $spx = comAmpRay($sp);
        $tpx = comAmpRay($tp);
        $ffx = comAmpRay($ff);

        echo "ยอดคอมิชชั่นในเดือนนี้คือ".($spx + $tpx + $ffx)."บาท<br>";
    ?>  
</body>
</html>