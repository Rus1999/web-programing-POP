<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function MyFunc()
        {
            static $num_func_calls = 0;
            return ++$num_func_calls;
        }
        echo "1) \$num_func_calls when use function 1 time = ".MyFunc()."<br>";
        echo "2) \$num_func_calls when use function 2 times = ".MyFunc()."<br>";
        echo "3) \$num_func_calls when use function 3 times = ".MyFunc()."<br>";
        
    ?>
</body>
</html>