<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	 function nhan($a,$b,$c=5)
	{
		if ($a==5 && $b==5 ) 
		{
			return $a + $b;
		}
		else{
			return $a+ $b+$c;
		}
		return 10;
	}

	$return = nhan(10,6);
	echo $return;
	

	 ?>
	
</body>
</html>