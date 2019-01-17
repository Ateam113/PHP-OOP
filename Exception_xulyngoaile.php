<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	
	try {
		throw new Exception("Error Processing Request", 1);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	 function customeException($exception)
	{
		echo "<b> Exception :<b>".$exception->getMessage();
	}

	set_exception_handler("customeException");

	throw new Exception("Lỗi cmnr.", 1);
	
	 ?>
	
</body>
</html>