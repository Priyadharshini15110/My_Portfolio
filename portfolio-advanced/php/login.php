<?php
session_start();
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = mysqli_real_escape_string($conn, $_POST["username"]);
  $password = md5($_POST["password"]); // simple hash for demo; use password_hash in production

  $sql = "SELECT id FROM users WHERE username='$username' AND password='$password' LIMIT 1";
  $result = mysqli_query($conn, $sql);

  if ($result && mysqli_num_rows($result) === 1) {
    $_SESSION["username"] = $username;
    header("Location: ../index.html");
    exit();
  } else {
    echo "<script>alert('Invalid username or password'); window.location.href='../login.html';</script>";
    exit();
  }
} else {
  header("Location: ../login.html");
  exit();
}
?>
