<?php
$servername = "localhost";
$username = "root";
$password = "younes";
$dbname = "projet";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST["username"];
$password = $_POST["password"];


$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  header("Location: Enseignants.html");
  exit;
} else {
  echo "Incorrect username or password";
}

mysqli_close($conn);
?>
