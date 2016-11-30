<?php
$servername = "localhost";
$username = "YOURUSER";
$password = "user";
$dbname = "coaster";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$username = $_POST["username"];
$password = $_POST["password"];
$logged_id = 0;
$url = 'http://localhost/coaster.io/index.php';

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error. "<br>");
}
else {
	$sql = "INSERT INTO login (Username, PW) VALUES ('$username', '$password')";
	$result = $conn->query($sql);
	$logged_id = 1;
	header("Location: $url");
}
$conn->close();
?>