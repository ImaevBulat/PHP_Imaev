<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
session_start();
if(!$_SESSION["rule"]) header("Location: .");
?>

<html>
<head>
<title> Редактирование данных </title>
</head>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b9432d31f68bbd","fa7305f9", "heroku_2ae8c98768abb76") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn, 'SET NAMES cp1251');
 $rows=mysqli_query($conn, "SELECT * FROM shop WHERE id=".$_GET['id']);
 while ($st = mysqli_fetch_array($rows)) {
 $name=$st["name"];
 $url = $st['url'];
 }
print "<form action='save_edit_shop.php' metod='get'>";
print "Название: <input name='name' size='20' type='text'
value='".$name."'>";
print "<br>URL: <input name='url' size='20' type='text'
value='".$url."'>";
print "<br><input type='hidden' name='id' value='".$_GET['id']."'>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться </a>";
?>
</body>
</html>