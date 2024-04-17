<?php
// $servername = "localhost";
// $username = "u704382176_uk";
// $password = "GieoGita@1";
// $db="u704382176_uk";

// $servername = "localhost";
// $username = "u704382176_join_gita";
// $password = "GieoGita@2022";
// $db="u704382176_join_gita";

$servername = "localhost";
$username = "root";
$password = "";
$db="ukgita";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>