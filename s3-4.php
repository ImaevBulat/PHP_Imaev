<html>
<head>
<title>Имаев Булат</title>
</head>
<body>
<form  method="post" action="<?php print $PHP_SELF ?>">
<input type="text" name="a" value=''>
<input type="submit" name="b" value="Enter login">
</form>
<?php
$a=$_POST['a'];
if ($a=='login1') echo 'Hello User1!';
else
{
if ($a=='login2') echo 'Hello User2!';
else
{
if ($a=='login3') echo 'Hello User3!';
else
{
if ($a=='login4') echo 'Hello User4!';
else if ($a!='' OR $a!='login4' OR $a!='login3' OR $a!='login2' OR $a!='login1'){ echo 'Вы не зарегистрированный пользователь!';}
}
}
}
?>
</body><p> <a href="index.php"> На главную </a>
</html>