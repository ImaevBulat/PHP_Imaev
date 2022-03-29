<?php
 session_start();
 if($_SESSION["rule"] == 2) {
  $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b9432d31f68bbd","fa7305f9", "heroku_2ae8c98768abb76") or die ("Невозможно подключиться к серверу");
  $zapros="DELETE FROM users WHERE username='" . $_GET['username']."'";
  mysqli_query($conn, $zapros);

  if($_GET['username'] == $_SESSION['username']) session_destroy();
 }
 header("Location: .");
?>