<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_GET['mail'];
$sql = "UPDATE users SET status='1' WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
	  include 'ver_mail.php';

}
