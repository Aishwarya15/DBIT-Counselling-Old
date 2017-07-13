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

$sql = "INSERT INTO  coun_2 (time_2,date_2)
VALUES ('$time','$date')";

if ($conn->query($sql) === TRUE) {
    echo "<br>Timeslot has been entered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>