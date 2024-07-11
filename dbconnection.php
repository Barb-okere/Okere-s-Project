<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estatedbase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully"
// ... Your PHP code to process and store comments ...


?>

