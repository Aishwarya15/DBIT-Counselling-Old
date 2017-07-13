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
echo "<br>Thanks for taking the test!<br>";


$FirstName=$_POST['fname'];
$Class=$_POST['class'];
$Dept=$_POST['dept'];
$Email=$_POST['email'];
$Phone=$_POST['phone'];
$Rollno=$_POST['rollno'];
$rad1 = $_POST['one'];
$rad2 = $_POST['two'];
$rad3 = $_POST['three'];
$rad4 = $_POST['four'];
$rad5 = $_POST['five'];
$rad6 = $_POST['six'];
$rad7 = $_POST['seven'];
$rad8 = $_POST['eight'];
$rad9 = $_POST['nine'];
$rad10 =$_POST['ten'];
$rad11 =$_POST['eleven'];
$rad12 =$_POST['twelve'];
$rad13 =$_POST['thirteen'];
$rad14 =$_POST['fourteen'];
$rad15 =$_POST['fifteen'];
$rad16 =$_POST['sixteen'];
$rad17 =$_POST['seventeen'];
$rad18 =$_POST['eighteen'];
$rad19 =$_POST['nineteen'];
$rad20 =$_POST['twenty'];
$rad21 =$_POST['twentyone'];


$sql = "INSERT INTO  student_data (fname, class , dept, email, phone, rollno, one, two, three, four, five, six, seven, eight, nine, ten, eleven, twelve, thirteen, fourteen, fifteen, sixteen, seventeen, eighteen, nineteen, twenty, twentyone)
VALUES ('$FirstName', '$Class', '$Dept', '$Email', '$Phone', '$Rollno', '$rad1','$rad2','$rad3','$rad4','$rad5','$rad6','$rad7','$rad8', '$rad9','$rad10','$rad11','$rad12','$rad13','$rad14','$rad15','$rad16','$rad17','$rad18','$rad19','$rad20','$rad21')";

if ($conn->query($sql) === TRUE) {
    echo "<br>Your score has been recorded succesfully";

    echo "Please meet your counsellor ---- on ------ at ------";

    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}







$conn->close();



?>
