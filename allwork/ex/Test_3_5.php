<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        # get the current date in number of seconds
        $currentDate = time();

        # print some text explainning the output
        echo "Days left before Friday";
        echo "<ol>";

        while(date("l",$currentDate)!="Friday"){
            #print day name
            echo "<l.l>".date("l",$currentDate)."\n";

            # add 24 hours to currentDate
            $currentDate += (60*60*24);
        }

        echo "</ol>\n";
    ?>
</body>
</html>