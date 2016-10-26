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
echo "Connected successfully <br>";

/*Insert Statement
$sql = "INSERT INTO testtable (ID, Name)
VALUES ('2', 'Some other alcohol')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/

/*Select Statement
$sql = "SELECT * FROM testtable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. ", Name: " . $row["Name"]. "<br>";
    }
} else {
    echo "0 results";
}*/

/*Delete Statement
$sql = "DELETE FROM testtable WHERE ID=1";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}*/

/*Update Statement
$sql = "UPDATE testtable SET ID='1' WHERE ID=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}*/

$conn->close();
?>