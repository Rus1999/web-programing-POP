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
        echo "String find: \"$str\"<hr>";

        // case sensitive find the position of first string
        echo "<b> find by strpos </b><br>";
        $pos1 = strpos($str, "ok");
        $pos2 = strpos($str, "OK");
        show_result();

        // case sensitive find the position of first string
        echo "<b> find by strrpos </b><br>";
        $pos1 = strrpos($str, "ok");
        $pos2 = strrpos($str, "OK");
        show_result();

        // case insensitive find the position of last string
        echo "<b> find by stripos</b><br>";
        $pos1 = stripos($str, "ok");
        $pos2 = stripos($str, "OK");
        show_result();

        // case insensitive find the position of last string
        echo "<b> find by strripos</b><br>";
        $pos1 = strripos($str, "ok");
        $pos2 = strripos($str, "OK");
        show_result();

        function show_result(){
            global $pos1, $pos2;

            echo "result finding string \"ok\":";
            echo ($pos1 === false? "not found" : "position: $pos1")."<br>";
            echo "result finding string \"OK\":";
            echo ($pos2 === false? "not found" : "position: $pos2")."<hr>";
        }
    ?>
</body>
</html>