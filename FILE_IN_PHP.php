<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FILE IN PHP</title>
</head>
<body>
	<?php echo "FILE trong PHP"; 
	// trả về con trỏ
	$file = fopen('OOP TRONG PHP.txt', 'r');
	echo '<br>';
	echo fgets($file);
	?>

</body>
</html>