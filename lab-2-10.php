<html>
<head><title>Imaev Bulat</title></head>
</html>
<?php
echo '<table border=1>';
for ($i = 0; $i < 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j < 11; $j++) {
        echo '<td style="color:'.($j%2?'black':'red').'">'.($i*10+$j).'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>