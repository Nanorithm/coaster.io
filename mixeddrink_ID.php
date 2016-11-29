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
	$sql = "SELECT MixedDrink_ID FROM mixeddrinks WHERE Liquor_ID=".$selectedID;
	$result = $conn->query($sql);
	$resultString="";
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$temp=$row["MixedDrink_ID"]." ";
			$resultString=$resultString.$temp;
		}
	}
	echo $resultString;
}
$conn->close();
?>