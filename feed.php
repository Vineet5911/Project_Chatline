<?php
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "chatline";

$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

$sql = "INSERT INTO feedback(email, feedback) VALUES ('$email', '$feedback')";
if (mysqli_query($conn, $sql)) {
  header("location: feed_dn.html");
} else {
  echo "Error recheck email and password: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
