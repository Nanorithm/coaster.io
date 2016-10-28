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
	$sql = "SELECT liquorimages.Liquor_Image
FROM liquors
	INNER JOIN liquorimages
		ON liquors.Liquor_ID=liquorimages.Liqour_ID
WHERE liquors.Liquor_ID=".$selectedID;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo $row["Liquor_Image"];
		}
	}
}
$conn->close();
?>