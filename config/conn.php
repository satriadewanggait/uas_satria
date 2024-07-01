<?php

$serverName = "localhost";
$serverUser = "root";
$dbPassword = "";
$dbName = "company";

$conn = new mysqli($serverName, $serverUser, $dbPassword, $dbName);

if (!$conn) die("Error connecting to database..");
