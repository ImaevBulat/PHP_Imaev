<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
session_start();
if(!$_SESSION["rule"]) header("Location: .");
?>

<html>
<head>
<title> �������������� ������ </title>
</head>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b9432d31f68bbd","fa7305f9", "heroku_2ae8c98768abb76") or die ("���������� ������������ � �������");
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
print "��������: <input name='name' size='20' type='text'
value='".$name."'>";
print "<br>����: <input name='genre' size='20' type='text'
value='".$genre."'>";
print "<br>�����������: <input name='dev' size='10' type='text'
value='".$dev."'>";
print "<br>��������: <input name='pub' size='20' type='text'
value='".$pub."'>";
print "<br>����� �������, ���. $: <input name='volume' size='20' type='text'
value='".$volume."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='���������'>";
print "</form>";
print "<p><a href=\"index.php\"> ��������� </a>";
?>
</body>
</html>