<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
		<?php include '../Advanced PHP/header.php'?>

<h1> Form Handling in PHP</h1>
	<form method="post" action="formphp.php">
	<p><label> Full Name <sup>*</sup></label><br>
		<input type="text" size="24" name="name" value="Fullname"></p>
	<p><label> Email Address <sup>*</sup></label><br>
		<input type="email" size="24" name="email" value="Email"></p>
		<p><label> Subject <sup>*</sup></label><br>
		<input type="text" size="24" name="subject" value="Subject"></p>
		<p><label> Message <sup>*</sup></label><br>
			<textarea name="message" rows="5" cols="30"></textarea></p><br>
		<input type="submit" name="send" value="Send Message">
			
		?>
				<?php include '../Advanced PHP/footer.php'?>


</body>
</html>