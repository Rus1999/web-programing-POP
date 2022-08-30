<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $name = "Leon";
        if ($name == ""){
            print ("You have no name.");
        }
        elseif(($name == "leon")||($name == "Leon")){
            echo "Hello, Leon!";
        }
        else{
            print("Your name is $name");
        }
    ?>
</body>
</html>