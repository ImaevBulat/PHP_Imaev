<?php
  header("Expires: Mon, 1 Apr 1974 05:00:00 GMT");
  header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
  header("Content-Disposition: attachment; filename=imaev_7.xlsx");

  require "../../vendor/autoload.php";

  use PhpOffice\PhpSpreadsheet\Spreadsheet;
  use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

  $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b9432d31f68bbd","fa7305f9", "heroku_2ae8c98768abb76") or die ("Невозможно подключиться к серверу");
  mysqli_query($conn, "SET NAMES utf8");

  $spreadsheet = new Spreadsheet();
  
  $sheet = $spreadsheet -> getActiveSheet();

  $sheet -> setTitle("Приложения");

  $sheet -> SetCellValue("A1", "Игры");
  $sheet -> mergeCells("A1:J1");
  $sheet -> getStyle("A1:J1") -> getAlignment() -> setHorizontal("center");

  $sheet -> getColumnDimension("A") -> setWidth(5);
  $sheet -> getColumnDimension("B") -> setWidth(30);
  $sheet -> getColumnDimension("C") -> setWidth(25);
  $sheet -> getColumnDimension("D") -> setWidth(20);
  $sheet -> getColumnDimension("E") -> setWidth(25);
  $sheet -> getColumnDimension("F") -> setWidth(20);
  $sheet -> getColumnDimension("G") -> setWidth(20);
  $sheet -> getColumnDimension("H") -> setWidth(20);
  $sheet -> getColumnDimension("I") -> setWidth(20);

  $sheet -> SetCellValue("A2", "№");
  $sheet -> SetCellValue("B2", "Название");
  $sheet -> SetCellValue("C2", "Жанр");
  $sheet -> SetCellValue("D2", "Разработчик");
  $sheet -> SetCellValue("E2", "Издатель");
  $sheet -> SetCellValue("F2", "Цифровой ключ");
  $sheet -> SetCellValue("G2", "Дата приобретения");
  $sheet -> SetCellValue("H2", "Дата окончания");
  $sheet -> SetCellValue("I2", "URL магазина");

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

    $sheet -> SetCellValue("A".($i+2), $i);
    $sheet -> SetCellValue("B".($i+2), $name_game);
    $sheet -> SetCellValue("C".($i+2), $genre);
    $sheet -> SetCellValue("D".($i+2), $dev);
    $sheet -> SetCellValue("E".($i+2), $pub);
    $sheet -> SetCellValue("F".($i+2), $key_str);
    $sheet -> SetCellValue("G".($i+2), $date_in);
    $sheet -> SetCellValue("H".($i+2), $date_out);
    $sheet -> SetCellValue("I".($i+2), $url);
  }

  $writer = new Xlsx($spreadsheet);
  $writer -> save("php://output");

  exit();
  
?>
