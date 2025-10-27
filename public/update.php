<?php
if($_SERVER ["REQUEST_METHOD"] == "POST" ){
	$id = $_POST['id'];
	$first_name = $_POST['first_name'];
	$last_name  =$_POST['last_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$salary = $_POST['salary'];
	$dob = $_POST['dob'];
	
	require_once('../config/database.php');
	$query = "UPDATE employees SET first_name = '$first_name' ,last_name = '$last_name',email = '$email',phone = '$phone',salary = '$salary',dob='$dob' WHERE id ='$id'; ";
	$results = mysqli_query($conn,$query);
	
	if(!$results){
		echo mysqli_error($conn);
	}
	header("Location: index.php");
}

?>