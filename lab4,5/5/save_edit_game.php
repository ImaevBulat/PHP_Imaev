<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
session_start();
if(!$_SESSION["rule"]) header("Location: .");
?>

<html><body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b9432d31f68bbd","fa7305f9", "heroku_2ae8c98768abb76") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn , 'SET NAMES cp1251');
 $zapros="UPDATE game SET name='".$_GET['name'].
"', genre='".$_GET['genre']."', dev='"
.$_GET['dev']."', pub='".$_GET['pub'].
"', volume='".$_GET['volume']."' WHERE id='"
.$_GET['id']."'";
 mysqli_query($conn, $zapros);
if (mysqli_affected_rows($conn)>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться</a> '; }
?>
</body></html>