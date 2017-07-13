<?php
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "counselling";
	// Create connection

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
   		die("Connection failed: " . $conn->connect_error);
	} 

$time=$_POST['time'];
$date=$_POST['date'];

$sql = "INSERT INTO  coun_1 (time_1,date_1)
VALUES ('$time','$date')";

if ($conn->query($sql) === TRUE) {
    echo "<br>Time slot has been entered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>