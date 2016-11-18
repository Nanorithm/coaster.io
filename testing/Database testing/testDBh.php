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
	$sql = "SELECT Liquor_Name FROM liquors";
	$result = $conn->query($sql);

	$response=array();
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$response[]=$row;
		}
	}
	
	for ($i = 0; $i < $result->num_rows; ++$i) {
		$jsonData=json_encode(array_values((array)$response[$i]));
		echo $jsonData;
	}

}
$conn->close();
?>