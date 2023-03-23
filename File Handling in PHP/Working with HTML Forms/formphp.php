<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Back End Form Handling</title>
</head>

<body>
	<?PHP
	if($_POST && isset($_POST['send'],$_POST['name'],$_POST['email'],$_POST['subject'],$_POST['message']))
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
	if(!$name){
		$errorMsg="Please Enter your Name";
		
	}
	elseif(!$email || !preg_match("/^\S+@\S+$/",$email)){
		$errorMsg="Please ENter Valid Email Address";
	}
	elseif(!message){
		$errorMsg="Please Enter your Message";
	}
	else{
		$to="Example@gmail.com";
		if(!$subject) $subject="Contact Form";
		$header="Form :webmaster@emample.com"."\r\n";
		mail($to,$subject,$message,$header);
		header("location: https://www.google.com/");
			exit;
	}
 
?>
</body>
</html>
