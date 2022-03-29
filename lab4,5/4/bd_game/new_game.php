<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<head> <title> Добавление новой записи </title> </head>
<body>
<H2>Добавление новой записи:</H2>
<form action="save_new_game.php" metod="get">
<br>Название: <input name="name" size="20" type="text">
<br>Жанр: <input name="genre" size="20" type="text">
<br>Разработчик: <input name="dev" size="10" type="text">
<br>Издатель: <input name="pub" size="20" type="text">
<br>Объем активов, тыс. $: <input name="volume" size="20" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p><a href="index.php"> Вернуться </a>
</body>
</html>