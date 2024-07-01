<?php

include "./config/conn.php";

try {
  $result = $conn->query("SELECT * from Product");
  $data = [];

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
  }

  return $data;
} catch (\Throwable $th) {
}
