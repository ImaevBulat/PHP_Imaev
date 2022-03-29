<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<head>
<title> Редактирование данных </title>
</head>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b9432d31f68bbd","fa7305f9", "heroku_2ae8c98768abb76") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn, 'SET NAMES cp1251');
 $rows=mysqli_query($conn, "SELECT * FROM game WHERE id='".$_GET['id']."'");
 while ($st = mysqli_fetch_array($rows)) {
 $id=$st['id'];
 $name=$st['name'];
 $genre = $st['genre'];
 $dev = $st['dev'];
 $pub = $st['pub'];
 $volume = $st['volume'];
 }
print "<form action='save_edit_game.php' metod='get'>";
print "Название: <input name='name' size='20' type='text'
value='".$name."'>";
print "<br>Жанр: <input name='genre' size='20' type='text'
value='".$genre."'>";
print "<br>Разработчик: <input name='dev' size='10' type='text'
value='".$dev."'>";
print "<br>Издатель: <input name='pub' size='20' type='text'
value='".$pub."'>";
print "<br>Объем активов, тыс. $: <input name='volume' size='20' type='text'
value='".$volume."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться </a>";
?>
</body>
</html>