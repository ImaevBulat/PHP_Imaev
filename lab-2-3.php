<html>
<head><title>Imaev Bulat</title></head>
</html>
<?php
echo'Assosiativniy massiv: ';
$cust= array("cnum"=>"2001", "cname"=>"Hoffman", "city"=>"London", "snum"=>"1001");
print_r ($cust);
echo '<br><br>' . 'Dobavlenie klyucha rating 100: ';
$cust["rating"] = 100;
foreach($cust as $k => $v)
echo  $k, ' => ', $v;
echo '<br><br>' . 'Sortirovka po znacheniyam: ';
asort($cust);
print_r($cust);
echo '<br><br>' . 'Sortirovka po klyucham: ';
ksort($cust);
print_r($cust);
echo '<br><br>' . 'Sorted massiv: ';
sort($cust);
print_r($cust); 
?>