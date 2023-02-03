<?php 

$username = "root";
$password = "";
$database = "capstone";

try {
  $pdo = new PDO("mysql:host=localhost;database=$database", $username, $password);
  // Set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
  die("ERROR: Could not connect. " . $e->getMessage());
}
?>