<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
session_start();
if(!$_SESSION["rule"]) header("Location: .");
?>

<html><body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b9432d31f68bbd","fa7305f9", "heroku_2ae8c98768abb76") or die ("���������� ������������ � �������");
 mysqli_query($conn, 'SET NAMES cp1251');
 $zapros="UPDATE `key` SET date_in='".$_GET['date_in']. "', date_out='".$_GET['date_out'].
"', id_game='".$_GET['id_game']."', id_shop='".$_GET['id_shop']."', price='".$_GET['price']."', key_str='".$_GET['key_str']."' WHERE id=".$_GET['id'];
 mysqli_query($conn, $zapros);
if (mysqli_affected_rows($conn)>0) {
 echo '��� ���������. <a href="index.php"> ��������� </a>'; }
 else { echo '������ ����������. <a href="index.php">
���������</a> '; }
?>
</body></html>