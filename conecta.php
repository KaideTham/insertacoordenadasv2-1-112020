<?php
$servername = "rds-bracelife.c2kjodxyeh08.us-east-1.rds.amazonaws.com";
$database = "bracelife";
$username = "KaideTham ";
$password = "Kaide5161939";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>