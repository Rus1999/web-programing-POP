<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function LocalX($xi)
        {
            $x = $xi + 100;
            echo "3) In function LocalX: \$x = $x <br>";
            return;
        }
        $x = 5;
        echo "1) \$x before call function = $x <br>";
        $x += 10;
        echo "2) \$x before call fucntion = $x <br>";

        LocalX($x);
        echo "4) \$x after call function = $x <br>"; 
    ?>
</body>
</html>