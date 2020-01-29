<?php

$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'kanguro';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
