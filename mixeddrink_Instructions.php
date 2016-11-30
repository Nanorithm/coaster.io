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
	$sql = "SELECT mixeddrinks.MixedDrink_Instructions, liquors.Liquor_Name, mixers.Mixer_Name, garnishes.Garnish_Name
FROM mixeddrinks
    JOIN liquors
        ON liquors.Liquor_ID = mixeddrinks.Liquor_ID
    JOIN mixers
        ON mixers.Mixer_ID = mixeddrinks.Mixer_ID
    JOIN garnishes
        ON garnishes.Garnish_ID = mixeddrinks.Garnish_ID
		WHERE mixeddrinks.MixedDrink_ID=".$selectedID;

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<strong>Ingredients: </strong><br>" .$row["Liquor_Name"]. "<br> " .$row["Mixer_Name"]. "<br> " .$row["Garnish_Name"]."<br><br><strong>Directions:</strong> <br>".$row["MixedDrink_Instructions"];
		}
	}
}
$conn->close();
?>
