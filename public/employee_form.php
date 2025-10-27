<DOCTYPE html>
<html>
<head>
<title>Add Employee</title>
</head>
<body>
<form action="create.php" method = "POST" autocomplete = "on">
<table border="1" cellpadding = "10" cellspacing = "0">
	<tr>
		<th colspan = "2"> Employee Registation </th> 
	</tr>
	<tr>
		<td><label for="first_name">First Name</label></td>
		<td><input type="text" name="first_name" id="first_name" placeholder = "Enter the first name.." required></td>
	</tr>
	<tr>
		<td><label for="last_name">Last Name</label></td>
		<td><input type="text" name="last_name" id="last_name" placeholder = "Enter the last name.." required></td>
	</tr>
	<tr>
		<td><label for="email">Email</label></td>
		<td><input type="email" name="email" id="email" placeholder = "Enter your email." required></td>
	</tr>
	<tr>
		<td><label for="phone">Phone No</label></td>
		<td><input type="tel" name="phone" id="phone" placeholder = "Enter your phone no" maxlength = "10"></td>
	</tr>
	<tr>
		<td><label for="Salary">Salary</label></td>
		<td>&#8360;<input type="number" name="salary" id="salary" step = "0.01"></td>
	</tr>
	<tr>
		<td><label for="dob">Date Of Birth</label></td>
		<td><input type="date" name="dob" id="dob" ></td>
	</tr>
</table> </br>
<input type="reset" value="Reset"> <input type="submit" value="Add">
	

</form>
</body>
</html>
