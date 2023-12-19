<?php
	session_start();

	$servername="localhost";
	$username="root";
	$password='';
	$dbname = "travel_and_tourism";
	$root=3307;
	$con = new mysqli($servername, $username, $password, $dbname,$root);

	// Check connection
	if($con->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
mysqli_report(MYSQLI_REPORT_ALL);
mysqli_report(MYSQLI_REPORT_STRICT);
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$firstname=$_POST["firstname"];
		$lastname=$_POST["lastname"];
		$date_of_birth=$_POST["birthdate"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$confirm_password=$_POST["confirmPassword"];

		$sql="INSERT INTO clients(`First Name`, `Last Name`, `Date of Birth`, `Email`, `Password`, `Confirm Password`)
			VALUES ('$firstname','$lastname','$date_of_birth','$email','$password','$confirm_password')";
		
		if(mysqli_query($con,$sql)) {
			echo "Record created successfully";
		} else {
			echo "Error creating record: " . mysqli_error($con);
		}
	}
	header("location:MainPage.php");  
	?>
