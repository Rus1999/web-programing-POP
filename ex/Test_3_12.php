<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $flg_break_happend = 0;
        for ($index=0; $index<10; $index++){
            if($index==3){
                break;
                $flg_break_happend = 1;
            }
            echo "$index<br>";
        }    
        if($flg_break_happend){
            echo "Loop ended because of break,<br>";
        }
        else{
            echo "Loop ended naturally.<br>";
        }
    ?>
</body>
</html>