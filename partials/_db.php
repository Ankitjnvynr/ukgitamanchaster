<?php
$servername = "localhost";
$username = "u704382176_uk";
$password = "GieoGita@1";
$db="u704382176_uk";



// $servername = "localhost";
// $username = "root";
// $password = "";
// $db="ukgieo";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>