<html>
<head><title>Imaev Bulat</title></head>
</html>
<?php
 $treug=array(1,2,3,4,5,6,7,8,9,10);
 $kvd=array(1,2,3,4,5,6,7,8,9,10);
 $rez=array();
 $rez1=array();
echo'treug: ';
foreach($treug as $k=>$n) {
    $treug[$k]=$n*($n+1)/2;
    echo $treug[$k] .'&nbsp;&nbsp;';
   }
    echo '<br>.<br>';
 echo'Kvardaty: ';
 foreach($kvd as $a=>$b) {
    $kvd[$a]=$b*$b;
    echo $kvd[$a].'&nbsp;';
    }
 echo '<br>.<br>';
 echo'Rezultat: ';
 $rez=array_merge($treug,$kvd);
 print_r($rez);
 echo '<br>.<br>';
 echo'Sorted: ';
 sort($rez);
 reset($rez);
 while (list($key, $val) = each($rez)) {
 echo "rez  [" . $key . "] = " . $val . "\n";
}
 echo '<br>.<br>';
 echo'removed first: ';
array_shift($rez);
print_r($rez);
 echo '<br>.<br>';
 echo'removed similar elements: ';
$rez1 = array_unique($rez);
print_r($rez1);
?>