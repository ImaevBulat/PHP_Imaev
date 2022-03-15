<html>
<head><title>Imaev Bulat</title></head>
</html>
<?php
$s3=($_POST["f"]." ".$_POST["n"]);
$s4=". My rady videt` vas na nashem sayte.";
switch ($_POST["z"]) {
// смотрим, чему равна переменная $z
case 1:
// 1 — это обращение «господин»…
$s1="Uvajaemiy ";
$s2="gospodin ";
break;
case 2:
// 2 — это обращение «госпожа»…
$s1="Uvajaemaya ";
$s2="gospoja ";
break;
case 3:
// 3 — это обращение «товарищ»…
$s1="Uvajaemiy ";
$s2="tovarisch ";
break;
}
 echo ($s1 . $s2 . $s3 . $s4."<br>"); 
 
 echo ("Dopolnitelnaya informatsiya:".$_POST['Information']);
?>