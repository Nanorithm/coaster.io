<?php
$servername = "localhost";
$username = "YOURUSER";
$password = "user";
$dbname = "module8";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$selectedID=$_REQUEST["id"];

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error. "<br>");
}
else {
	$sql = "SELECT First_Name, Last_Name, Bio FROM team WHERE ID=".$selectedID;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "Name: " . $row["First_Name"].  " " .$row["Last_Name"]. ", Bio: " .$row["Bio"]. "<br>";
		}
	}
}
$conn->close();
?>