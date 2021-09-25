<?php
$servername = "a372193.ftp.mchost.ru";
$username = "a372193_1";
$password = "1Z9b7gve94k3";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>