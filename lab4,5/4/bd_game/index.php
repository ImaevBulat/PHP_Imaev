<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b9432d31f68bbd","fa7305f9", "heroku_2ae8c98768abb76") or die ("���������� ������������ � �������");
 mysqli_query($conn, "SET NAMES cp1251");
?>
<h2>����� ����������������:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> �������� </th> <th> ���� </th>
 <th> ����������� </th> <th> �������� </th> <th> ����� �������, ���. $ </th>
 <th> ������������� </th> <th> ���������� </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM game"); // ������ �� ������� �������� � �������������
while ($row=mysqli_fetch_array($result)){// ��� ������ ������ �� �������
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
 echo "<td>" . $row["genre"] . "</td>";
 echo "<td>" . $row["dev"] . "</td>";
 echo "<td>" . $row["pub"] . "</td>";
 echo "<td>" . $row["volume"] . "</td>";
 echo "<td><a href='edit_game.php?id=" . $row["id"]
. "'>�������������</a></td>"; // ������ ������� ��� ��������������
 echo "<td><a href='delete_game.php?id=" . $row["id"]
. "'>�������</a></td>"; // ������ ������� ��� �������� ������
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // ����� ������� � ������� ��
print("<P>����� �������: $num_rows </p>");
?>
<a href="new_game.php"> �������� ������ </a><br><br>

<h2>�������� ��������:</h2>
<table border='1''>
<tr>
 <th> id </th>
 <th> �������� </th> <th> URL </th>
 <th> ������������� </th> <th> ���������� </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM shop"); // ������ �� ������� �������� � �������������
while ($row=mysqli_fetch_array($result)){// ��� ������ ������ �� �������
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
 echo "<td>" . $row["url"] . "</td>";
 echo "<td><a href='edit_shop.php?id=" . $row["id"]
. "'>�������������</a></td>"; // ������ ������� ��� ��������������
 echo "<td><a href='delete_shop.php?id=" . $row["id"]
. "'>�������</a></td>"; // ������ ������� ��� �������� ������
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // ����� ������� � ������� ��
print("<P>����� �������: $num_rows </p>");
?>
<a href="new_shop.php"> �������� ������ </a><br><br>

<h2>�������� �����:</h2>
<table border='1''>
<tr>
 <th> id </th>
 <th> ���� ������������ </th> <th> ���� ��������� </th> <th> id ���� </th>
 <th> id ��������� �������� </th> <th> ���������, $ </th> <th> ���� </th>
 <th> ������������� </th> <th> ���������� </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM `key`"); // ������ �� ������� �������� � �������������
while ($row=mysqli_fetch_array($result)){// ��� ������ ������ �� �������
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . date("d.m.Y", strtotime($row["date_in"])) . "</td>";
 echo "<td>" . date("d.m.Y", strtotime($row["date_out"])) . "</td>";
 echo "<td>" . $row["id_game"] . "</td>";
 echo "<td>" . $row["id_shop"] . "</td>";
 echo "<td>" . $row["price"] . "</td>";
 echo "<td>" . $row["key_str"] . "</td>";
 echo "<td><a href='edit_key.php?id=" . $row["id"]
. "'>�������������</a></td>"; // ������ ������� ��� ��������������
 echo "<td><a href='delete_key.php?id=" . $row["id"]
. "'>�������</a></td>"; // ������ ������� ��� �������� ������
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // ����� ������� � ������� ��
print("<P>����� �������: $num_rows </p>");
?>
<a href="new_key.php"> �������� ������ </a><br><br>

<a href="gen_pdf.php"> ��������� PDF </a><br>
<a href="gen_xls.php"> ��������� Excel </a><br>

<br><a href='..'>�����</a><br>

</body> </html>
