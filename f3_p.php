<html>
<head><title>Imaev Bulat</title></head>
</html>
<?php
if ($_POST["d"]=="plus") {
$c=$_POST["a"]+$_POST["b"];
echo ("summ = $c");
} else {
$c=$_POST["a"]*$_POST["b"];
echo ("prod = $c");
}
echo ("<BR> <A href='f3.html'> Back </A>");
?>