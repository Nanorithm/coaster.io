<?php
$servername = "localhost";
$username = "YOURUSER";
$password = "user";
$dbname = "coaster";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$username = $_POST["username"];
$password = $_POST["password"];

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error. "<br>");
}
else {
	$sql = "INSERT INTO login (Username, PW) VALUES ('$username', '$password')";
	$result = $conn->query($sql);
	echo "Registration Successful!! <a href='http://localhost/coaster.io/index.php'>Return to Site.</a>";
}
$conn->close();
?>