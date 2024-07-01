<?php

$serverName = "localhost";
$serverUser = "root";
$dbPassword = "";
$dbName = "company";

try {
    //code...
    $conn = new mysqli($serverName, $serverUser, $dbPassword, $dbName);
} catch (\Throwable $th) {
    throw $th;
}

// if (!$conn) die("Error connecting to database..");
