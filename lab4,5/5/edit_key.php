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
 $rows=mysqli_query($conn, "SELECT * FROM `key` WHERE id=".$_GET['id']);
 while ($st = mysqli_fetch_array($rows)) {
 $date_in=$st["date_in"];
 $date_out=$st["date_out"];
 $id_game=$st["id_game"];
 $id_shop=$st["id_shop"];
 $price=$st["price"];
 $key_str=$st["key_str"];
 }

print "<form action='save_edit_key.php' metod='get'>";
print "<br>���� ������������: <input name='date_in' type='date'
value='".$date_in."'>";
print "<br>���� ���������: <input name='date_out' type='date'
value='".$date_out."'>";

print "<br>id ����: <select name='id_game'>";
$result=mysqli_query($conn, "SELECT * FROM game");
foreach($result as $row) {
  if($row["id"] == $id_game) echo "<option value='".$row["id"]."' selected>".$row["name"]."</option>";
  else echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
  }
echo "</select>";

print "<br>id ��������� ��������: <select name='id_shop'>";
$result=mysqli_query($conn, "SELECT * FROM shop");
foreach($result as $row) {
  if($row["id"] == $id_shop) echo "<option value='".$row["id"]."' selected>".$row["name"]."</option>";
  else echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
  }
echo "</select>";

print "<br>���������, $: <input name='price' size='20' type='text'
value='".$price."'>";
print "<br>����: <input name='key_str' size='20' type='text'
value='".$key_str."'>";
print "<input type='hidden' name='id' value='".$_GET['id']."'>";
print "<input type='submit' name='' value='���������'>";
print "</form>";
print "<p><a href=\"index.php\"> ��������� </a>";
?>
</body>
</html>