<?php
session_start();
$servername = "localhost";
$username = "YOURUSER";
$password = "user";
$dbname = "coaster";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$username = $_POST["username"];
$password = $_POST["password"];
//$logged_id = $_SESSION['token'];
$url = 'http://localhost/coaster.io/index.php';

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error. "<br>");
}
else {
	$sql = "SELECT * FROM login WHERE (Username = '$username' AND PW = '$password')";
	$count = num_rows($sql);
	//$results = ("SELECT * FROM login WHERE (username = '$username' AND password = '$password')");
	if($count == 0)
	{
		echo "LOGIN INFO INVALID ";
		die("Connection failed: " . $conn->connect_error. "<br>");
	}
	else
	{
		$result = $conn->query($sql);
		$logged_id = 1;
		header("Location: $url");
	}
}
$conn->close();
?>