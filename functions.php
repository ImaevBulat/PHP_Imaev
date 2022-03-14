<?php
function function1($a){
foreach($a as $m){
    echo array_sum($m)/count($m)." ";
}
}
function function2($a){
	echo '<br><br>';
	$cust= array($a[1], 0, 0, 0, 0, 0);
print_r ($cust);
echo '<br><br>';
$cust1= array($a[2], $a[3], 0, 0, 0, 0);
print_r ($cust1);
echo '<br><br>';
$cust2= array($a[4], $a[5], $a[6], 0, 0, 0);
print_r ($cust2);
echo '<br><br>';
$cust3= array($a[7], $a[8], $a[9], $a[10], 0, 0 );
print_r ($cust3);
echo '<br><br>';
$cust4= array($a[11], $a[12], $a[13], $a[14], $a[15], 0);
print_r ($cust4);
echo '<br><br>';
$cust5= array($a[16], $a[17], $a[18], $a[19], $a[20], $a[21]);
print_r ($cust5);

}
?>