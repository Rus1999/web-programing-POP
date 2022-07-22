<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($row=0; $row<10; $row++){
            for ($col=0; $col<10; $col++){
                if($col==5){
                    break 2;
                }
                
                echo "[$row,$col]<br>";
            }
        }
    ?>
</body>
</html>