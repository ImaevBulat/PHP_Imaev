<html>
<head><title>Imaev Bulat</title></head>
</html>

<?php
$n = 20; $b = 10; $d = 19;
echo 'Ischodniy: <br />';
for($i = 0; $i < $n; $i++) {
$a[$i] = rand(-10, 10);
echo $a[$i].'&nbsp';
}
echo '<br />Skorrectirovanniy: <br />';
for($i = 0; $i < $n; $i++) {
if (($i < $b || $i > $d) && $a[$i] >= 0) $a[$i] = 1;
echo $a[$i].'&nbsp';
}
?>