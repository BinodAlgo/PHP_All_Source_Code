<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Front End</title>
</head>

<body>
	<h1> Create a form and insert Record</h1>
	<form action="Insertrecordbackend.php" method="post">
	
	<p><label for="firstname">First Name</label>
		<input type="text" name="first_name" id="firstname"></p>
	<p><label for="lastname">Last Name</label>
		<input type="text" name="last_name" id="lastname"></p>
	
	<p><label for="address">Address</label>
		<input type="text" name="Address" id="address"></p>
	<p><label for="emailaddress">Email Address</label>
		<input type="text" name="email" id="emailaddress"></p>
		<input type="submit" value="submit">
	</form>
		  
</body>
</html>