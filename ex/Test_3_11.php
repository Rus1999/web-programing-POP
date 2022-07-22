<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($index=0; $index<10; $index++){
            # A. when $index is three, the loop ends.
            if($index == 3){
                break;
            }
            echo "$index<br>";
        }
        # B. After the break, execution starts here.
        echo "After the loop: index=$index<br>";
    ?>
</body>
</html>