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
	$sql = "SELECT mixeddrinkimages.MixedDrink_Image
FROM mixeddrinks
	INNER JOIN mixeddrinkimages
		ON mixeddrinks.MixedDrink_ID=mixeddrinkimages.MixedDrink_ID
WHERE mixeddrinks.MixedDrink_ID=".$selectedID;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo $row["MixedDrink_Image"];
		}
	}
}
$conn->close();
?>