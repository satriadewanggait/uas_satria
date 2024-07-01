<?php

require dirname(__DIR__)."/config/conn.php";
session_start();

$goBack = 'http://'. $_SERVER['HTTP_HOST']. '/dashboard';

if (isset($_POST)) {
  $product_code = $_POST['product_code'];
  $product_name = $_POST['product_name'];
  $price = $_POST['price'];
  $stok = $_POST['stok'];

  try {
    $sql = "UPDATE Product SET product_name='$product_name', price=$price, stok=$stok WHERE product_code=$product_code";

    if ($conn->query($sql) === TRUE) {
      header("Location: " . $goBack . "");
      exit();
    }
  } catch (\Throwable $th) {
    var_dump($th);
  }
}