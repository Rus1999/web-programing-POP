<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        # print some text explaining the output
        echo ("Days left before Friday: \n");
        echo ("<ol>\n");

        for ($currentDate = date("U"); date("l",$currentDate)!="Friday"; $currentDate += (60*60*24)){
            # print day name
            echo "<li>".date("l", $currentDate)."\n";
        }

        echo "</ol>\n"
    ?>
</body>
</html>