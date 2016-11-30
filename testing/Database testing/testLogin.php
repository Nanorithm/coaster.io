<?php
//session_start();
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
	$result = $conn->query($sql);
	if($result->num_rows == 0)
	{
		$result = $conn->query($sql);
		echo "<a href = 'http://localhost/coaster.io/register.php'>Back to Login </a>";
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