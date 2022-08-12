<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "nooknet ok";

        // find and return "ok" and string after that word (case sensitive)
        echo "line 1:".strstr($str, "ok")."<br>";
        // find and return "OK" and string after that word (case sensitive)
        echo "line 2:".strstr($str, "OK")."<br>";
        // find and return "ok" and string after that wrod (case insensitive)
        echo "line 3:".stristr($str, "ok")."<br>";
        echo "line 4:".strrchr($str, "e")."<br>";
    ?>
</body>
</html>