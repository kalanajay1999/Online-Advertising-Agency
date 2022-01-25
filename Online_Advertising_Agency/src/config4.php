<?php

$username = $_POST['fname'];
$password = $_POST['pwd'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "sign in details";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if($conn->connect_error) {
  die("Connection failed:" .$conn->connect_error);
}
echo "Connected successfully";
?>


