<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<head> <title> ���������� ����� ������ </title> </head>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b9432d31f68bbd","fa7305f9", "heroku_2ae8c98768abb76") or die ("���������� ������������ � �������");
 mysqli_query($conn, "SET NAMES cp1251");
?>
<H2>���������� ����� ������:</H2>
<form action="save_new_key.php" metod="get">
<br>���� ������������: <input name="date_in" type="date">
<br>���� ���������: <input name="date_out" type="date">

<?php
print "<br>id ����: <select name='id_game'>";
$result=mysqli_query($conn, "SELECT * FROM game");
echo "<option value='' selected hidden>...</option>";
foreach($result as $row) echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
echo "</select>";
?>

<?php
print "<br>id ��������� ��������: <select name='id_shop'>";
$result=mysqli_query($conn, "SELECT * FROM shop");
echo "<option value='' selected hidden>...</option>";
foreach($result as $row) echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
echo "</select>";
?>

<br>���������, $: <input name="price" size="20" type="text">
<br>����: <input name="key_str" size="20" type="text">
<p><input name="add" type="submit" value="��������">
<input name="b2" type="reset" value="��������"></p>
</form>
<p><a href="index.php"> ��������� </a>
</body>
</html>