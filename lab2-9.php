<HTML>
<TITLE> Tablitsa umnojeniya, Imaev </TITLE>
<BODY>
<TABLE border=1>
<?php
for ($i=1; $i<=10; $i++) { // запускаем первый цикл
echo ("<tr>"); // начало строки таблицы
for ($k=1; $k<=10; $k++) { // запускаем второй цикл
echo ("<td align=center>"); // открываем ячейку таблицы
$p=$i*$k; // находим произведение двух чисел и...
echo ($p); // выводим его,
echo ("</td>"); // а потом закрываем ячейку
}
echo ("</tr>"); // конец строки таблицы
}
?>
</TABLE>
</BODY>
</HTML>