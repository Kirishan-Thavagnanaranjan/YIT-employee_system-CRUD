<?php
require_once('../config/database.php');

$query = "SELECT * FROM employees;";
$results = mysqli_query($conn,$query);
if(!$results){
	echo mysqli_error($conn);
}

?>

<DOCTYPE html>
<html>
<head>
<title>Employees</title>
</head>
<body>
<h2>Employees</h2>
	<table border="1" cellpadding = "10" cellspacing = "0">
			<tr>
				<td>Id</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Email</td>
				<td>Phone</td>
				<td>Salary</td>
				<td>DOB</td>
				<td>Created_At</td>
				<td>Actions</td>
			</tr>
		<?php foreach($results as $employee){ 
				//while($row = mysqli_fetch_assoc($results) ?>
			<tr>
				<td><?php echo $employee['id']; ?></td>
				<td><?php echo $employee['first_name']; ?></td>
				<td><?php echo $employee['last_name']; ?></td>
				<td><?php echo $employee['email']; ?></td>
				<td><?php echo $employee['phone']; ?></td>
				<td><?php echo $employee['salary']; ?></td>
				<td><?php echo $employee['dob']; ?></td>
				<td><?php echo $employee['created_at']; ?></td>
				<td><button><a href="../public/edit.php?id=<?php echo $employee['id']?>" >Edit </a></button>
					<button><a href="../public/delete.php?id=<?php echo $employee['id']?>" onclick ="return confirm('Are you sure !')">Delete </a></button>
					</td>
			</tr>
		<?php } ?>
	</table></br>
	<button><a href="employee_form.php">Add Employee</a></button>
</body>
</html>