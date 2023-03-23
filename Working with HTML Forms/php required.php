<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
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
</body>
</html>