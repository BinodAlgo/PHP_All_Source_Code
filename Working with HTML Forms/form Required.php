<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Required PHP</title>
</head>
	<?php
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$name=$email='';
		if(empty($_POST['name'])){
			$nameError='Name is Empty please fill the field';
		}
		else{
			$name=trim(htmlspecialchars($_POST['name']));
		}
				if(empty($_POST['email'])){
			$emailError='Email is Empty please fill the field';
		}
		else{
			$email=trim(htmlspecialchars($_POST['email']));
		}
	}
	
	
	?>
<body>
	<h1> Form Required in PHP</h1>
	<form method="post" action="">
	Name:<input type="text" name="name"><br>
		<span class="error"><?php if (isset($nameError)) echo $nameError?></span><br>
		
	Email:<input type="text" name="email"><br>
		<span class="error"><?php if (isset($emailError)) echo $emailError?></span><br>
	
	
	<input type="submit" name="Submit">
	</form>
</body>
</html>