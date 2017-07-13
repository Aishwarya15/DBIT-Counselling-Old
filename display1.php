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
	//echo "<br>Connected successfully<br>";

	$sql="SELECT * FROM student_data";
	$record=mysqli_query($conn,$sql);
?>







<!DOCTYPE html>
<html>
<head>
	<title>DBIT-Counselling </title>
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/9/97/DBIT_logo.png" type="image/png"></link>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

		hr{
			border: 0.1px solid steelblue;
		}

		img {
    			 float: right;
   			 margin: 0 0 10px 10px;
			}
		.imgalign{
			float: left;
   			 margin: 10px 10px 10px 10px;
		
			}
		header{
			background:steelblue;
			}
      		.mySlides {display:none;}

		blockquote{
				margin-left:20%;
				margin-right:20%;
		    		padding: 5px;
			    	background-color:steelblue;
		    		border-left: 10px solid black;
			}
		input[type=submit] {
				background-color: steelblue;
				color: white;
				padding: 5px 8px;
				margin: 4px 0;
				border: none;
				border-radius: 3px;
				cursor: pointer;
			}

		input[type=submit]:hover {
				background-color:dark blue;
			}
		/*fieldset{
				margin-left: 25%;
				margin-right:25%;
				display: block;
				width: 50%;
				box-shadow: 2px solid grey;

			}*/
		.allign{

				margin-left: 10%;
				margin-right:10%;
				display: block;
				width: 80%;
				box-shadow: 2px solid grey;



			}
		h2 , h3{
				font-family: serif;
			}
		a{
				text-decoration: none;
				color:black;
			}

      		ul{
				list-style-type: none;
				margin: 2;
				padding: 2;
				overflow: hidden;
				background-color:steelblue;
				/*background:#e67e22;*/
			}


		li{
        		float: left;
        		border-right:1px solid #161F41;
			}
		li a{
				display: block ;
				color: white;
				text-align: right;
				padding: 10px;
				text-decoration:none;

			}
		li a:hover:not(.active){
				background-color:#161F41;
				text-decoration:none;
			}
      		.active {
    				background-color:#161F41 ;
      			}

      		li:last-child {
    				border-right: none;

      		body {

      			}
        		background-color:steelblue ;
        		background-repeat: no-repeat;
     			}


		/*body{

			background-color: steelblue;
			}*/
		fieldset{
			background-color: white;
			}

			.radhika{
				border: 1px solid black;

			}
	
</style>
</head>
<body>
<fieldset>
<header>
	<table align="center">
		<tr>
			<td><img src="dbitlogo.png" alt="DBIT LOGO" style="width: 75px;height: 75px;"></td>
			<td><font size="6" color="white">DON BOSCO INSTITUTE OF TECHNOLOGY</font><br>
			    <center><font size="6" color="white">COUNSELLING DEPARTMENT</font></center>
			</td>
		</tr>
	</table>
</header><br>

<TABLE cellspacing=60 align=center>
<TR>
<hr><br>
<TD>
<form method = "post" action="r1.php">


<h3>Select the Department and Class of Student :</h3><br>

<table>
<tr>
						<th>Class</th>
						<td>:</td>
						<td><select name="class" id="class">
							<option value="select-class" selected>--Select Class--</option>
							<option value="FE" >FE</option>
							<option value="SE" >SE</option>
							<option value="TE" >TE</option>
							<option value="BE" >BE</option>
							<option value="others" >OTHERS</option>
						</select></td>
						</tr>

						<tr>
						<th>Department</th>
						<td>:</td>
						<td><select name="dept" id="dept">
							<option value="I" selected>--Select Dept--</option>
							<option value="IT">Information Technology</option>
							<option value="CO">Computer Science</option>
							<option value="EX">Electronics And Telecommunication</option>
							<option value="ME">Mechanical</option>
							<option value="others" >OTHERS</option>
						</select></td>
						</tr>
</table>
<button type=submit value=Submit >OK</button><br><br>
</form>
	</center>
	</TD>
	<TD float='right'>
<form name="time-slot" method="post" action="d1.php">
<h3>Enter the time-slot when you are available :</h3><br>
<table>
<tr>
<th>
<b>From </b></th>
<td>:</td>
<td><input type="time" name="time" id="time" data-uk-timepicker><br></td>
</tr>

<tr>
<th>
<b>To</b></th>
<td>:</td>
<td><input type="time" name="time" id="time" data-uk-timepicker><br></td>
</tr>

<tr>
<th>
<b>Date</b></th>
<td>:</td>
<td><input type="date" name="date" id="date"><br></td>
</tr>

</table>
<button type=submit value=Submit >OK</button><br><br>
</form>
</TD>
</TR>
</TABLE>

  <br>		<center>
		<blockquote align="center">
						<h3><span style="color:#9999;"><strong><span">Test Results</span></strong></span></h3>
					</blockquote><br>
	<table id="table" class="radhika" rules="all">
	<tr >
		<th class="radhika">Name</th>
		<th class="radhika">Class</th>
		<th class="radhika">Department</th>
		<th class="radhika">Email</th>
		<th class="radhika">Contact</th>
		<th class="radhika">Rollno</th>
		<th class="radhika">Q1</th>
		<th class="radhika">Q2</th>
		<th class="radhika">Q3</th>
		<th class="radhika">Q4</th>
		<th class="radhika">Q5</th>
		<th class="radhika">Q6</th>
		<th class="radhika">Q7</th>
		<th class="radhika">Q8</th>
		<th class="radhika">Q9</th>
		<th class="radhika">Q10</th>
		<th class="radhika">Q11</th>
		<th class="radhika">Q12</th>
		<th class="radhika">Q13</th>
		<th class="radhika">Q14</th>
		<th class="radhika">Q15</th>
		<th class="radhika">Q16</th>
		<th class="radhika">Q17</th>
		<th class="radhika">Q18</th>
		<th class="radhika">Q19</th>
		<th class="radhika">Q20</th>
		<th class="radhika">Q21</th>
	</tr>

	<?php
		while($student=mysqli_fetch_assoc($record)){
			echo "<tr>";
			echo "<td>".$student['fname']."</td>";
			echo "<td>".$student['class']."</td>";
			echo "<td>".$student['dept']."</td>";
			echo "<td>".$student['email']."</td>";
			echo "<td>".$student['phone']."</td>";
			echo "<td>".$student['rollno']."</td>";
			echo "<td>".$student['one']."</td>";
			echo "<td>".$student['two']."</td>";
			echo "<td>".$student['three']."</td>";
			echo "<td>".$student['four']."</td>";
			echo "<td>".$student['five']."</td>";
			echo "<td>".$student['six']."</td>";
			echo "<td>".$student['seven']."</td>";
			echo "<td>".$student['eight']."</td>";
			echo "<td>".$student['nine']."</td>";
			echo "<td>".$student['ten']."</td>";
			echo "<td>".$student['eleven']."</td>";
			echo "<td>".$student['twelve']."</td>";
			echo "<td>".$student['thirteen']."</td>";
			echo "<td>".$student['fourteen']."</td>";
			echo "<td>".$student['fifteen']."</td>";
			echo "<td>".$student['sixteen']."</td>";
			echo "<td>".$student['seventeen']."</td>";
			echo "<td>".$student['eighteen']."</td>";
			echo "<td>".$student['nineteen']."</td>";
			echo "<td>".$student['twenty']."</td>";
			echo "<td>".$student['twentyone']."</td>";
			echo "</tr>";
		}

	?>
	</table>
	<!--<?php// include("rad2.php"); exit; ?>-->
	</center>
</body>
</html>