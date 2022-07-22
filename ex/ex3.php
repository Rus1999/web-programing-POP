<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        for ($start=2; $start<=12; $start++){
            # skip that round if start mod 2 equal 1
            # or process only even number
            if ($start%2==1){
                continue;
            }
            for ($i=1; $i<=12; $i++){
                # echo $i."<br>";
                $result=$i*$start;
                echo "$start x ".$i." = ".$result."<br>";
            }

            echo "<hr>";
        }

        /*
        for ($start=2; $start<=12; $start+=2){
            if ($start%2==1){
                continue;
            }
            for ($i=1; $i<=12; $i++){
                # echo $i."<br>";
                $result=$i*$start;
                echo "$start x ".$i." = ".$result."<br>";
            }

            echo "<hr>";
        }
        */
    ?>
</body>
</html>