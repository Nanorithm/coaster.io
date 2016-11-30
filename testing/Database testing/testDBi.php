<?php
$servername = "localhost";
$username = "YOURUSER";
$password = "user";
$dbname = "coaster";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$name=$_REQUEST["id"];
if ($name=="Whiskey"){
	$selectedID=1;
}
else if ($name=="Gin"){
	$selectedID=2;
}
else if ($name=="Rum"){
	$selectedID=3;
}
else if ($name=="Tequila"){
	$selectedID=4;
}
else if ($name=="Brandy"){
	$selectedID=5;
}
else {
	$selectedID=6;
}

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error. "<br>");
}
else {
	$sql = "SELECT mixeddrinks.MixedDrink_ID FROM mixeddrinks JOIN liquors ON liquors.Liquor_ID = mixeddrinks.Liquor_ID WHERE liquors.Liquor_ID=".$selectedID;
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