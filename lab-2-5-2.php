<html>
<head><title>Imaev Bulat</title></head>
</html>
<?php
function f($u, $t) {
    if ($u <= $t*(-1)) {
        return $u * log($u) + pow(2.7,($t-1));
    } else if (-$t < $u && $u < $t) {
        return 2*$u*$t;
    } else if ($u > $t) {
        return pow((cos($u)),2) + (pow($t,2))/(5);
    } 
}

$a = rand();
$b = rand();
echo "a = " . $a . "; b = " . $b . "; z = ";
$x=pow($a,2);
$z = cos(f($x,$b))+ sin(pow(f($a,$b),2));
echo $z;
?>