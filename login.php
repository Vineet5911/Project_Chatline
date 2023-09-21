<?php
$email = $_POST['email'];
$password = $_POST['password'];

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "chatline";

$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

$sql = "INSERT INTO chatline(email, password) VALUES ('$email', '$password')";
if (mysqli_query($conn, $sql)) {
  header("Location: funcation.html");
} else {
  echo "Error recheck email and password: " . mysqli_error($conn);
}

mysqli_close($conn);
?>