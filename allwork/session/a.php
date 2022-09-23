<?php
// $name = "pop";
// echo "$name<br>";

session_start();
$_SESSION['name']="Rus";
echo $_SESSION['name']."<br>";

?>
<a href="b.php">b page</a><br>
<a href="c.php">c page (logout)</a>