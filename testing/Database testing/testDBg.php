<?php
$servername = "localhost";
$username = "YOURUSER";
$password = "user";
$dbname = "coaster";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$username = $_POST["UN"];
$password = $_POST["PW"];

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error. "<br>");
}
else {
	$sql = "INSERT INTO login (Username, PW) VALUES ('$username', '$password')";
	$result = $conn->query($sql);
}
$conn->close();
?>