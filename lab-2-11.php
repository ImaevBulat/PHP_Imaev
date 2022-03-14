<html>
<head><title>Imaev Bulat</title></head>
</html>
<p>
<?php
$n = rand(1,499);
$p=0;
for ($i = 0; $i < (sqrt($n)+1); $i++) {
    for ($j = 0; $j < (sqrt($n)+1); $j++) {
		for ($k = 0; $k < (sqrt($n)+1); $k++) {
        if (($i*$i + $j*$j + $k*$k) == $n) echo "Mojno dlya chisla ".$n. '<br>'; 
    }
	}
}

?>