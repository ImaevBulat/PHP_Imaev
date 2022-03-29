<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b9432d31f68bbd","fa7305f9", "heroku_2ae8c98768abb76") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn, "SET NAMES cp1251");
?>
<h2>Языки программирования:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> Название </th> <th> Жанр </th>
 <th> Разработчик </th> <th> Издатель </th> <th> Объем активов, тыс. $ </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM game"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
 echo "<td>" . $row["genre"] . "</td>";
 echo "<td>" . $row["dev"] . "</td>";
 echo "<td>" . $row["pub"] . "</td>";
 echo "<td>" . $row["volume"] . "</td>";
 echo "<td><a href='edit_game.php?id=" . $row["id"]
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_game.php?id=" . $row["id"]
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего записей: $num_rows </p>");
?>
<a href="new_game.php"> Добавить запись </a><br><br>

<h2>Цифровые магазины:</h2>
<table border='1''>
<tr>
 <th> id </th>
 <th> Название </th> <th> URL </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM shop"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
 echo "<td>" . $row["url"] . "</td>";
 echo "<td><a href='edit_shop.php?id=" . $row["id"]
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_shop.php?id=" . $row["id"]
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего записей: $num_rows </p>");
?>
<a href="new_shop.php"> Добавить запись </a><br><br>

<h2>Цифровые ключи:</h2>
<table border='1''>
<tr>
 <th> id </th>
 <th> Дата приобретения </th> <th> Дата окончания </th> <th> id Игры </th>
 <th> id Цифрового магазина </th> <th> Стоимость, $ </th> <th> Ключ </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM `key`"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . date("d.m.Y", strtotime($row["date_in"])) . "</td>";
 echo "<td>" . date("d.m.Y", strtotime($row["date_out"])) . "</td>";
 echo "<td>" . $row["id_game"] . "</td>";
 echo "<td>" . $row["id_shop"] . "</td>";
 echo "<td>" . $row["price"] . "</td>";
 echo "<td>" . $row["key_str"] . "</td>";
 echo "<td><a href='edit_key.php?id=" . $row["id"]
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_key.php?id=" . $row["id"]
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего записей: $num_rows </p>");
?>
<a href="new_key.php"> Добавить запись </a><br><br>

<a href="gen_pdf.php"> Сохранить PDF </a><br>
<a href="gen_xls.php"> Сохранить Excel </a><br>

<br><a href='..'>Назад</a><br>

</body> </html>
