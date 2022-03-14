<html>
<head><title>Imaev Bulat</title></head>
</html>

<?php
function f($u, $t) {
    if ($u >= 0 && $t >= 0) {
        return ($u + $t) / ($u * $t);
    } else if ($u < 0 && $t >= 0) {
        return pow($u, 2) + $t / $u;
    } else if ($u >= 0 && $t < 0) {
        return $u + 2 * $t;
    } else if ($u < 0 && $t < 0) {
        return (pow($t, 2) + $u) / (pow($u, 3) * pow($t, 4));
    }
}
$a = rand();
$b = rand();
echo "a = " . $a . "; b = " . $b . "; z = ";
$arg1 = $a / $b;
$arg2 = (pow($b, 8) - pow($a, 7)) / ($a * $b);
$arg3 = (pow($a, 10) + pow($b, 12)) / ($a * pow($b, 2) - $a);
$z = f($arg1, $arg2) + f($arg3, $b);
echo $z;
?>