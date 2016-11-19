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
	$sql2 = "SELECT Mixer_Name FROM Mixers";
	$sql3 = "SELECT Garnish_Name FROM Garnishes";
	
	$result = $conn->query($sql); // liquors
	$result2 = $conn->query($sql2); // mixers
	$result3 = $conn->query($sql3); // garnishes
	
	// Liquors
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
	
	// Mixers
	$response2=array();
	if ($result2->num_rows > 0) {
		// output data of each row
		while($row = $result2->fetch_assoc()) {
			$response2[]=$row;
		}
	}
	
	for ($i = 0; $i < $result2->num_rows; ++$i) {
		$jsonData2=json_encode(array_values((array)$response2[$i]));
		echo $jsonData2;
	}
	
	// Garnishes
	$response3=array();
	if ($result3->num_rows > 0) {
		// output data of each row
		while($row = $result3->fetch_assoc()) {
			$response3[]=$row;
		}
	}
	
	for ($i = 0; $i < $result3->num_rows; ++$i) {
		$jsonData3=json_encode(array_values((array)$response3[$i]));
		echo $jsonData3;
	}
	

}
$conn->close();
?>