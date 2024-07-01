<?php

require dirname(__DIR__)."/config/conn.php";
session_start();

$goBack = 'http://'. $_SERVER['HTTP_HOST']. '/dashboard';

if (isset($_POST['login'])) {
  $email = $_POST['email'];
	$password = $_POST['password'];

  $result = $conn->query("SELECT * from User where email='$email' and password='$password'");
  if($result->num_rows > 0) {
    $_SESSION["auth"] = true;
    header("Location: ".$goBack."");
    echo 'Berhasil';
    exit();
  } else {
    echo 'Gagal';
    exit();
  }
};
