<html>
<head><title>Imaev Bulat</title></head>
</html>

<?php
$a = array(-4,3,2,6,-1,-1,7);
$b = 0;
foreach($a as $c) {
    if ($c < 0 or $c & 1) {
        $b = $b + $c;
    }
}
print_r($b);
?>