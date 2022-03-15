<HEAD> <TITLE>Imaev Bulat</TITLE> </HEAD>
<?php
$a=$_POST["a"];
$b=$_POST["b"];
if ($_POST["a"]==$_POST["b"]) {
 echo("Числа равны");
 }
 elseif($_POST["a"]>$_POST["b"]) {
 echo("Наибольшее число: ". $_POST["a"]);
 }
 else 
 { echo("Наибольшее число: ". $_POST["b"]); }
 echo "<br><BR> <A href='s3-1.html'> Назад </A>";
?>