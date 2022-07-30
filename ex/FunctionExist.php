<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Check function</h4>
    <?php
        function CeilNum($a, $b)
        {
            $a = ceil($a);
            $b = ceil($b);
        }
        
        $NameFunc = "CeilNum";
        if(function_exists("$NameFunc"))
        {
            echo "fucntion $NameFunc exists in this program";
            
        }else
        {
            echo "$NameFunc Not found in this program";
        }
    ?>
</body>
</html>