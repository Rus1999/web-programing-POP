<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "twinkle, twinkle LITTLE STAR.";
        echo "$str<hr>";
        echo "all string to upper case : ".strtoupper($str)."<br>";
        echo "all string to lower case : ".strtolower($str)."<br>";
        echo "first character of sentence to upper case : ".ucfirst($str)."<br>";
        echo "first character of word to upper case : ".ucwords($str)."<br>";
    ?>  
</body>
</html>