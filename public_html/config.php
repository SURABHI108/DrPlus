<?php


$servername = "localhost";
$username = "id18461719_root";
$password = "Sahil123456@";
$db = "id18461719_drplus";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


?> 