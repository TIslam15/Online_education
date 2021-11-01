<?php
//$hoat = "localhost";
//$userName = "fyrhp";
//$password = "";
//$dbName = "";
// Create database connection
$conn = new mysqli('localhost', 'root', '', 'education');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>