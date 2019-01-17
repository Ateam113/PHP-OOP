<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>COOKIE_SECSION</title>
</head>
<body>
	<?php 
	// luu tru thong tin nguoi dung
	// cookie luu thong tin nguoi dung tren may nguoi dung
		$cookie_name= 'user';
		$cookie_value = 'Manh';
		setcookie($cookie_name,$cookie_value,time() + 3);
		 $cookie=$_COOKIE[$cookie_name];
		 echo $cookie;
	 ?>
	
</body>
</html>