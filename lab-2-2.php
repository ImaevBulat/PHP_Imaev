<html>
<head><title>Imaev Bulat</title></head>
</html>
<?php
$per = 6;
$array = array();
$rez = array();
echo ("Massiv iz ".$per." elementov, so sluchainimy znacheniyami: ");
for ($i=0;$i<$per;$i++)
{
    $array[$i]=rand(10,99);
    echo $array[$i].'&nbsp;&nbsp;';
}
echo '<br><br>'."Sorted massiv: ";
sort($array);
print_r($array);
 
echo '<br><br>'."Reversed massiv: ";
$rez = array_reverse($array);
print_r($rez);
 
echo '<br><br>'."Last element removed massive: ";
array_pop($rez);
print_r($rez);
 
echo '<br><br>'."Massive sum: ";
$sum = array_sum($rez);
print_r($sum);
 
echo '<br><br>'."Kol-vo elementov v massive: ";
$count = count($rez);
print_r($count);
 
echo '<br><br>'."Srednee arifmeticheskoe: ";
$sred=$sum/$count;
print_r($sred);
//"Число 50: 
if (in_array(50, $rez)) {
    echo '<br><br>'."Est` 50";
}
 
echo '<br><br>'."Unique massiv: ";
$unik=array_unique($rez);
print_r($unik);
 ?>