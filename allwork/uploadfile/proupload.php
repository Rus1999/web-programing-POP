<?php
    $tmp_name = $_FILES['picture']['tmp_name'];
    $name = $_FILES['picture']['name'];
    $tmpPath = "./picture/".$name;
    if(!move_uploaded_file($tmp_name, $tmpPath)){
        echo "error";
    } else {
        echo "OK <br>";
        echo "File Name: ".$_FILES['picture']['name']."<br>";
        echo "Size: ".$_FILES['picture']['size']."<br>";
        echo "Temp Name: ".$_FILES['picture']['tmp_name']."<br>";
    }
?>