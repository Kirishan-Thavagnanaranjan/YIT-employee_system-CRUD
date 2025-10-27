<?php
if($_SERVER ["REQUEST_METHOD"] == "POST" ){
	$first_name = $_POST['first_name'];
	$last_name  =$_POST['last_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$salary = $_POST['salary'];
	$dob = $_POST['dob'];
	
	require_once('../config/database.php');
	$query = "INSERT INTO employees(first_name,last_name,email,phone,salary,dob) VALUES('$first_name','$last_name','$email','$phone','$salary','$dob');";
	$results = mysqli_query($conn,$query);
	
	if(!$results){
		echo mysqli_error($conn);
	}
	header("Location: index.php");
}

?>