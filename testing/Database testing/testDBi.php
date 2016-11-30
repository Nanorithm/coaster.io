<?php
$servername = "localhost";
$username = "YOURUSER";
$password = "user";
$dbname = "coaster";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error. "<br>");
}
else {
	$sql = "SELECT mixedDrink_Instructions FROM mixedDrinks WHERE MixedDrink_Name = 'Old Fashioned'";
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo $row["mixedDrink_Instructions"];
		}
	}
}
$conn->close();
?>