<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function Recurs($x, $n)
        {
            $x *= 2;
            echo "call Recurs fucntion round: $n variable \$x = $x <br>";
            $nr = $n + 1;
            if($x <= 999)
            {
                Recurs($x, $nr);
            }
            return;
        }
        // random number 1-9
        $x = rand(1, 9);
        echo "before call Reccurs function \$x = $x <hr>";
        Recurs($x, 1);
    ?>
</body>
</html>