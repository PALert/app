<?php
$servername = "localhost";
$username = "root";
$password = "123456";

try {
  $conn = new PDO("mysql:host=$servername;dbname=htu", $username, $password);
  
  //PDO Connection
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
