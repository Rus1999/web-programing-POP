<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        # get today's weekday name
        $english_Day = date("l");

        # Find the today's Thai name
        if($english_Day == "Monday"){
            $th_Day = "จันทร์";
        }
        elseif($english_Day == "Tuesday"){
            $th_Day = "อังคาร";
        }
        elseif($english_Day == "Wednesday"){
            $th_Day = "พุธ";
        }
        elseif($english_Day == "Thursday"){
            $th_Day = "พฤหัสบดี";
        }
        elseif($english_Day == "Friday"){
            $th_Day = "ศุกร์";
        }
        elseif($english_Day == "Saturday"){
            $th_Day = "เสาร์";
        }
        elseif($english_Day == "Sunday"){
            $th_Day = "อาทิตย์";
        }

        echo "วันนี้เป็นวัน".$th_Day;
    ?>
</body>
</html>