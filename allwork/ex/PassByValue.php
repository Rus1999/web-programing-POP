<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // pass $a to use only in this function
        function addX($a)
        {
            $a += 10;
            echo "In fuction Addx: Had added value therefore \$a = $a <br>";
            return;
        }
        $a = 10;
        echo "\$a before call fucntion = $a <br>";
        
        addX($a);
        echo "\$a after call function = $a <br>";
    ?>
</body>
</html>
        