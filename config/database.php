<?php
$conn = mysqli_connect("localhost","root","","employee_system");

if(!$conn){
	die("Database failed to connect!".mysqli_connect_error());
}
?>