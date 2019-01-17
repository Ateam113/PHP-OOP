<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SESSION</title>
</head>
<body>
	<?php

			session_start();
			$_SESSION['color']='BLue';
			echo $_SESSION['color'];
			session_unset();
			session_destroy();// delete session

	 ?>
	
</body>
</html>