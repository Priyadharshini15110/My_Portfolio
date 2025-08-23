<?php
$host = "localhost";
$user = "root"; // XAMPP default
$pass = "";     // XAMPP default is empty password
$db   = "portfolio_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
