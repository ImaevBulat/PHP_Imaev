<html>
<head>
<title>Imaev Bulat</title>
</head>
<body>
<form  method="post" action="<?php print $PHP_SELF ?>">
Enter your name:<br>
<input type="text" name="name" size=”15” maxlength=”20” value="" ><br>
<br>
1. Считаете ли Вы, что у многих ваших знакомых хороший характер? <br>
<input type="radio" name="v1" value="Yes" checked> Да <input type="radio" name="v1" value="No"> Нет <br>
2. Раздражают ли Вас мелкие повседневные обязанности? <br>
<input type="radio" name="v2" value="Yes" checked> Да <input type="radio" name="v2" value="No"> Нет <br>
3. Верите ли Вы, что ваши друзья преданы Вам? <br>
<input type="radio" name="v3" value="Yes" checked> Да <input type="radio" name="v3" value="No"> Нет <br>
4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание? <br>
<input type="radio" name="v4" value="Yes" checked> Да <input type="radio" name="v4" value="No"> Нет <br>
5. Способны ли Вы ударить собаку или кошку? <br> 
<input type="radio" name="v5" value="Yes" checked> Да <input type="radio" name="v5" value="No"> Нет <br>
6. Часто ли Вы принимаете лекарства? <br>
<input type="radio" name="v6" value="Yes" checked> Да <input type="radio" name="v6" value="No"> Нет <br>
7. Часто ли Вы меняете магазин, в который ходите за продуктами? <br>
<input type="radio" name="v7" value="Yes" checked> Да <input type="radio" name="v7" value="No"> Нет <br>
8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись? <br>
<input type="radio" name="v8" value="Yes" checked> Да <input type="radio" name="v8" value="No"> Нет <br>
9. Тяготят ли Вас общественные обязанности? <br>
<input type="radio" name="v9" value="Yes" checked> Да <input type="radio" name="v9" value="No"> Нет <br>
10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства? <br>
<input type="radio" name="v10" value="Yes" checked> Да <input type="radio" name="v10" value="No"> Нет <br>
11. Часто ли Вам приходят в голову мысли о Вашей невезучести? <br>
<input type="radio" name="v11" value="Yes" checked> Да <input type="radio" name="v11" value="No"> Нет <br>
12. Сохранилась ли у Вас фигура по сравнению с прошлым? <br>
<input type="radio" name="v12" value="Yes" checked> Да <input type="radio" name="v12" value="No"> Нет <br>
13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей? <br>
<input type="radio" name="v13" value="Yes" checked> Да <input type="radio" name="v13" value="No"> Нет <br>
14. Нравится ли Вам семейная жизнь? <br>
<input type="radio" name="v14" value="Yes" checked> Да <input type="radio" name="v14" value="No"> Нет <br>
15. Злопамятны ли Вы? <br>
<input type="radio" name="v15" value="Yes" checked> Да <input type="radio" name="v15" value="No"> Нет <br>
16. Находите ли Вы, что стоит погода, типичная для данного времени года? <br>
<input type="radio" name="v16" value="Yes" checked> Да <input type="radio" name="v16" value="No"> Нет <br>
17. Случается ли Вам с утра быть в плохом настроении? <br>
<input type="radio" name="v17" value="Yes" checked> Да <input type="radio" name="v17" value="No"> Нет <br>
18. Раздражает ли Вас современная живопись? <br>
<input type="radio" name="v18" value="Yes" checked> Да <input type="radio" name="v18" value="No"> Нет <br>
19. Надоедает ли Вам присутствие чужих детей в доме более одного часа? <br>
<input type="radio" name="v19" value="Yes" checked> Да <input type="radio" name="v19" value="No"> Нет <br>
20. Надоедает ли Вам делать лабораторные по PHP? <br>
<input type="radio" name="v20" value="Yes" checked> Да <input type="radio" name="v20" value="No"> Нет <br>
<br>
<input type="submit" name="otpravit" value="Отправить">
</form>
<?php
$counterPoints = 0;
$counterPoints1 = 0;
if($_POST['v3'] == 'Yes'){
   $counterPoints++;
}
if($_POST['v9'] == 'Yes'){
   $counterPoints++;
}
if($_POST['v10'] == 'Yes'){
   $counterPoints++;
}
if($_POST['v13'] == 'Yes'){
   $counterPoints++;
}
if($_POST['v14'] == 'Yes'){
   $counterPoints++;
}
if($_POST['v19'] == 'Yes'){
   $counterPoints++;
}
if($_POST['v1'] == 'No'){
   $counterPoints1++;
}
if($_POST['v1'] == 'No'){
   $counterPoints1++;
}
if($_POST['v2'] == 'No'){
   $counterPoints1++;
}
if($_POST['v4'] == 'No'){
   $counterPoints1++;
}
if($_POST['v5'] == 'No'){
   $counterPoints1++;
}
if($_POST['v6'] == 'No'){
   $counterPoints1++;
}
if($_POST['v7'] == 'No'){
   $counterPoints1++;
}
if($_POST['v8'] == 'No'){
   $counterPoints1++;
}
if($_POST['v11'] == 'No'){
   $counterPoints1++;
}
if($_POST['v12'] == 'No'){
   $counterPoints1++;
}
if($_POST['v15'] == 'No'){
   $counterPoints1++;
}
if($_POST['v16'] == 'No'){
   $counterPoints1++;
}
if($_POST['v17'] == 'No'){
   $counterPoints1++;
}
if($_POST['v18'] == 'No'){
   $counterPoints1++;
}
if($_POST['v20'] == 'No'){
   $counterPoints1++;
}
if(($counterPoints + $counterPoints1) >= 16){
   $result = 'У Вас покладистый характер';
} elseif(($counterPoints + $counterPoints1) < 16 && ($counterPoints + $counterPoints1) > 8){
   $result = 'Вы не лишены недостатков но с вами можно ладить';
} elseif(($counterPoints + $counterPoints1) < 8){
   $result = 'Вашим друзьям можно посочувствовать';
}
echo $_POST['name']. ' Ваш результат: '. $result;
?>
</body><p> <a href="index.php"> На главную </a>
</html>