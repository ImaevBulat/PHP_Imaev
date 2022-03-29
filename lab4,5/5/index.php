<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<body>

<?php
  session_start();

  $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b9432d31f68bbd","fa7305f9", "heroku_2ae8c98768abb76") or die ("Невозможно подключиться к серверу");
  mysqli_query($conn, "SET NAMES cp1251");

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $query=mysqli_query($conn, "SELECT * FROM users WHERE username='".$_POST["username"]."' AND password='".md5($_POST["password"])."'");
    if($fetch = mysqli_fetch_array($query)) {
      $_SESSION["username"] = $fetch["username"];
      $_SESSION["rule"] = $fetch["rule"];
      if(!isset($_SESSION["count"])) $_SESSION["count"] = 0;
    }
    else {
      echo "<html><head><title>Авторизация</title></head><body>";
      echo "Неверное имя пользователя или пароль!<br>";
      echo "<br><a href='.'> Вернуться </a>";
    }
  }
  elseif(!isset($_SESSION["username"])) { 
    echo "<html><head><title>Авторизация</title></head><body>";
    echo "<h1>Имаев Б. Р.</h1>";
    echo "<form method='post' action='". $_SERVER["PHP_SELF"] ."'>";
    echo "<p>Пользователь:</p><input type='text' name='username' size='16'>";
    echo "<p>Пароль:</p><input type='password' name='password' size='16'><br><br>";
    echo "<input type='submit' name='submit' value='Войти'></form>";
    echo "<br><a href='..'>Назад</a><br>";
  }
  
  if(isset($_SESSION["username"])) {
    $query=mysqli_query($conn, "SELECT rule FROM users WHERE username='" . $_SESSION["username"] . "'");
    if($fetch = mysqli_fetch_array($query)) $_SESSION["rule"] = $fetch["rule"];

    echo "<html><head><title>Игры</title></head><body>";
    echo "<h2>Игры:</h2>";
    echo "<table border='1'>";
    echo "<tr><th> id </th>";
    echo "<th> Название </th> <th> Жанр </th>";
    echo "<th> Разработчик </th> <th> Издатель </th> <th> Объем активов, тыс. $ </th>";
    echo "<th> Редактировать </th>";
    if($_SESSION["rule"] == 2) echo "<th>Уничтожить</th>";
    echo "</tr>";
    $result=mysqli_query($conn, "SELECT * FROM game");
    while ($row=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["genre"] . "</td>";
    echo "<td>" . $row["dev"] . "</td>";
    echo "<td>" . $row["pub"] . "</td>";
    echo "<td>" . $row["volume"] . "</td>";
      echo "<td><a href='edit_game.php?id=" . $row["id"]
      . "'>Редактировать</a></td>";
      if($_SESSION["rule"] == 2) echo "<td><a href='delete_game.php?id=" . $row["id"]
      . "'>Удалить</a></td>";
      echo "</tr>";
    }
    echo "</table>";
    $num_rows = mysqli_num_rows($result);
    echo "<p> Всего записей: $num_rows </p>";
    echo "<a href='new_game.php'> Добавить запись </a><br><br>";

    echo "<h2>Цифровые магазины:</h2>";
    echo "<table border='1'>";
    echo "<tr><th> id </th>";
    echo "<th> Название </th> <th> URL </th>";
    echo "<th> Редактировать </th>";
    if($_SESSION["rule"] == 2) echo "<th> Уничтожить </th></tr>";
    $result=mysqli_query($conn, "SELECT * FROM shop");
    while ($row=mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["url"] . "</td>";
      echo "<td><a href='edit_shop.php?id=" . $row["id"]
      . "'>Редактировать</a></td>";
      if($_SESSION["rule"] == 2) echo "<td><a href='delete_shop.php?id=" . $row["id"]
      . "'>Удалить</a></td>";
      echo "</tr>";
    }
    echo "</table>";
    $num_rows = mysqli_num_rows($result);
    echo "<p> Всего записей: $num_rows </p>";
    echo "<a href='new_shop.php'> Добавить запись </a><br><br>";

    echo "<h2>Цифровые ключи:</h2>";
    echo "<table border='1'>";
    echo "<tr><th> id </th>";
    echo "<th> Дата приобретения </th> <th> Дата окончания </th>";
    echo "<th> id Игры </th> <th> id Цифрового магазина </th>";
    echo "<th> Стоимость, $ </th> <th> Ключ </th>";
    echo "<th> Редактировать </th>";
    if($_SESSION["rule"] == 2) echo "<th> Уничтожить </th> </tr>";
    $result=mysqli_query($conn, "SELECT * FROM `key`");
    while ($row=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . date("d.m.Y", strtotime($row["date_in"])) . "</td>";
    echo "<td>" . date("d.m.Y", strtotime($row["date_out"])) . "</td>";
    echo "<td>" . $row["id_game"] . "</td>";
    echo "<td>" . $row["id_shop"] . "</td>";
    echo "<td>" . $row["price"] . "</td>";
    echo "<td>" . $row["key_str"] . "</td>";
      echo "<td><a href='edit_key.php?id=" . $row["id"]
      . "'>Редактировать</a></td>";
      if($_SESSION["rule"] == 2) echo "<td><a href='delete_key.php?id=" . $row["id"]
      . "'>Удалить</a></td>";
      echo "</tr>";
    }
    echo "</table>";
    $num_rows = mysqli_num_rows($result);
    echo "<p> Всего записей: $num_rows </p>";
    echo "<a href='new_key.php'> Добавить запись </a><br><br>";

    if($_SESSION["rule"] == 2) {
      echo "<h2>Пользователи:</h2>";
      echo "<table border='1'>";
      echo "<tr><th>Имя пользователя</th><th>Пароль</th><th>Права доступа</th>";
      echo "<th>Редактировать</th><th>Уничтожить</th></tr>";
      $query=mysqli_query($conn, "SELECT * FROM users");
      while($fetch=mysqli_fetch_array($query)) {
        echo "<tr><td>" . $fetch["username"] . "</td>";
        echo "<td>" . $fetch["password"] . "</td>";
        echo "<td>" . $fetch["rule"] . "</td>";
        echo "<td><a href='edit_users.php?username=" . $fetch["username"] . "'>Редактировать</a></td>";
        echo "<td><a href='delete_users.php?username=" . $fetch["username"]. "'>Удалить</a></td></tr>";
      } 
      echo "</table>";
   
      $num_rows = mysqli_num_rows($query);
      echo "<p> Всего записей: $num_rows </p>";
      echo "<a href='new_users.php'>Добавить запись</a><br><br>";
    }

    echo "<br><a href='gen_pdf.php'> Сохранить PDF </a><br>";
    echo "<a href='gen_xls.php'> Сохранить Excel </a><br>";

    $_SESSION["count"]++;
    echo "<br>Подключений за сессию: " . $_SESSION["count"];
    echo "<br><a href='exit.php'>Выход</a><br>";

    echo "<br><a href='..'>Назад</a><br>";

    echo "</body></html>";
 }
?>