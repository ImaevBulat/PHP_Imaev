<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html><body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b9432d31f68bbd","fa7305f9", "heroku_2ae8c98768abb76") or die ("���������� ������������ � �������");
 mysqli_query($conn , 'SET NAMES cp1251');
 $zapros="UPDATE game SET name='".$_GET['name'].
"', genre='".$_GET['genre']."', dev='"
.$_GET['dev']."', pub='".$_GET['pub'].
"', volume='".$_GET['volume']."' WHERE id='"
.$_GET['id']."'";
 mysqli_query($conn, $zapros);
if (mysqli_affected_rows($conn)>0) {
 echo '��� ���������. <a href="index.php"> ��������� </a>'; }
 else { echo '������ ����������. <a href="index.php">
���������</a> '; }
?>
</body></html>