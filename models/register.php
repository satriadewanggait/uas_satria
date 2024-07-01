<?php

if (isset($_POST['reg'])) {
  $username = $_POST['userId'];
  $password = $_POST['userPass'];
  $email = $_POST['userEmail'];
  $hospital = $_POST['hospital'];

  if (empty($username) || empty($password) || empty($email) || empty($hospital)) {
    die("please fill in with all your identification");
  } else {
    $stmt = $conn->prepare("INSERT INTO User(name, positionId, email, password) VALUES (?,?,?,?)");

    if ($stmt->bind_param("ssss", $hospital, $email, $username, $password)) {
      $stmt->execute();
      echo "done";
    } else {
      echo "there is some problems";
    }
  }
}
