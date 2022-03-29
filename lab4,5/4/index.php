<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<body>
<h1> Имаев Б. Р. </h1>
<p> Дата и время:

<?php
        date_default_timezone_set("Asia/Yekaterinburg");
	$d=date("d.m.Y H:i");
	
	echo($d);
?>
<br><br>

<a href='./bd_user/'>Общее задание (Пользователи)</a><br>
<a href='./bd_game/'>Вариант №7 (Игры)</a><br>

<br><a href='..'>Назад</a><br>


