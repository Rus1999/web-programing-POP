<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "line 1: ".substr("ABCDE", 1)."<br>";
        echo "line 2: ".substr("ABCDE", 1, 3)."<br>";
        echo "line 3: ".substr("ABCDE", 0, 4)."<br>";
        echo "line 4: ".substr("ABCDE", 0, 8)."<br>";
        echo "line 5: ".substr("ABCDE", 2, 1)."<br><hr>";

        $str = "nooknet";
        for ($i=1; $i<=strlen($str);$i++){
            echo substr($str, 0, $i)."<br>";
        }
    ?>
</body>
</html>