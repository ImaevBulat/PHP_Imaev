<?php
session_start();
if(!$_SESSION["rule"]) header("Location: .");
?>

<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b9432d31f68bbd","fa7305f9", "heroku_2ae8c98768abb76") or die ("Невозможно подключиться к серверу");
  mysqli_query($conn, "SET NAMES cp1251");

  define('FPDF_FONTPATH',"../fpdf/font/");
  require("../fpdf/fpdf.php");
  
  $pdf = new FPDF();
  $pdf -> AddPage();

  $pdf -> AddFont("Arial", "", "arial.php");
  $pdf -> SetFont("Arial", "", "18");

  $pdf -> Cell(185, 10, "Игры", 1, 1, "C");
 
  $pdf -> AddFont("Arial", "", "arial.php");
  $pdf -> SetFont("Arial", "", "6");

  $pdf -> Cell(5, 5, "№", 1, 0, "C");
  $pdf -> Cell(30, 5, "Название", 1, 0, "C");
  $pdf -> Cell(25, 5, "Жанр", 1, 0, "C");
  $pdf -> Cell(20, 5, "Разработчик", 1, 0, "C");
  $pdf -> Cell(25, 5, "Издатель", 1, 0, "C");
  $pdf -> Cell(20, 5, "Цифровой ключ", 1, 0, "C");
  $pdf -> Cell(20, 5, "Дата приобретения", 1, 0, "C");
  $pdf -> Cell(20, 5, "Дата окончания", 1, 0, "C");
  $pdf -> Cell(20, 5, "URL магазина", 1, 1, "C");

  $pdf -> SetFont("Arial", "", "5");

  $query_key = mysqli_query($conn, "SELECT * FROM `key`");
  for($i = 1; $fetch_key = mysqli_fetch_array($query_key); $i++) {
    $key_str = $fetch_key["key_str"];
    $date_in = $fetch_key["date_in"];
    $date_out = $fetch_key["date_out"];
    $id_game = $fetch_key["id_game"];
    $id_shop = $fetch_key["id_shop"];

    $query_game = mysqli_query($conn, "SELECT * FROM game WHERE id = '" . $id_game . "'");
    if($fetch_game = mysqli_fetch_array($query_game)) {
      $name_game = $fetch_game["name"];
      $genre = $fetch_game["genre"];
      $dev = $fetch_game["dev"];
      $pub = $fetch_game["pub"];
    }
   
    $query_shop = mysqli_query($conn, "SELECT * FROM shop WHERE id = '" . $id_shop . "'");
    if($fetch_shop = mysqli_fetch_array($query_shop)) {
      $url = $fetch_shop["url"];
    }

    $pdf -> Cell(5, 5, $i, 1, 0, "C");
    $pdf -> Cell(30, 5, $name_game, 1, 0, "C");
    $pdf -> Cell(25, 5, $genre, 1, 0, "C");
    $pdf -> Cell(20, 5, $dev, 1, 0, "C");
    $pdf -> Cell(25, 5, $pub, 1, 0, "C");
    $pdf -> Cell(20, 5, $key_str, 1, 0, "C");
    $pdf -> Cell(20, 5, $date_in, 1, 0, "C");
    $pdf -> Cell(20, 5, $date_out, 1, 0, "C");
    $pdf -> Cell(20, 5, $url, 1, 1, "C");
}

$pdf -> Output("imaev_7.pdf", "D");
?>