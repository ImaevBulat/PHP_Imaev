<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html><body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b9432d31f68bbd","fa7305f9", "heroku_2ae8c98768abb76") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn, 'SET NAMES cp1251');
 $zapros="UPDATE `key` SET date_in='".$_GET['date_in']. "', date_out='".$_GET['date_out'].
"', id_game='".$_GET['id_game']."', id_shop='".$_GET['id_shop']."', price='".$_GET['price']."', key_str='".$_GET['key_str']."' WHERE id=".$_GET['id'];
 mysqli_query($conn, $zapros);
if (mysqli_affected_rows($conn)>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться</a> '; }
?>
</body></html>