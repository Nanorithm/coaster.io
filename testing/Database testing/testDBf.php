<?php
$servername = "localhost";
$username = "YOURUSER";
$password = "user";
$dbname = "coaster";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$selectedID=$_REQUEST["id"];

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error. "<br>");
}
else {
	$sql = "SELECT garnishimages.Garnish_Image
FROM garnishes
	INNER JOIN garnishimages
		ON garnishes.Garnish_ID=garnishimages.Garnish_ID
WHERE garnishes.Garnish_ID=".$selectedID;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo $row["Garnish_Image"];
		}
	}
}
$conn->close();
?>