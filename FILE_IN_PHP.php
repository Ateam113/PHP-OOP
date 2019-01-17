<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FILE IN PHP</title>
</head>
<body>
	<?php echo "FILE trong PHP"; 
	/*
	hàm fopen trả về con trỏ của file 
	tham sô thư 2 là quyền truy câp "r"ỏ "w"
	*/

	$file = fopen('OOP TRONG PHP.txt', 'r');
	echo '<br>';
	echo "read line one......".'<br>';
	echo fgets($file).'<br>';
	echo "read all".'<br>';
	echo fread($file, filesize('OOP TRONG PHP.txt'));
	?>

</body>
</html>