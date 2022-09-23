<?php
// isset($_GET['name'])?$name=$_GET['name']:$name="";
// echo "$name<br>";

session_start();
echo $_SESSION['name']."<br>";

?>
<a href="a.php">a page (login)</a><br>
<a href="c.php">c page (logout)</a>