<?php

require dirname(__DIR__) . "/config/conn.php";
$goBack = 'http://' . $_SERVER['HTTP_HOST'] . '/dashboard';

if (isset($_POST)) {
  $product_name = $_POST['product_name'];
  $price = $_POST['price'];
  $stok = $_POST['stok'];

  try {

    $sql = "INSERT INTO Product(product_name, stok, price) VALUES ('$product_name', $stok, $price)";

    if ($conn->query($sql) === TRUE) {
      header("Location: " . $goBack . "");
      exit();
    }
  } catch (\Throwable $th) {}
};
