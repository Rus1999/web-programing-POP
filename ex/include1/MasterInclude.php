<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 10;
        echo "\$a = $a <br>";
        echo "call \$b from other script by command include <br>";
        include('IncludeScript.php');
        $a += $b;
        echo "\$a = $a <br>";
    ?>
</body>
</html>