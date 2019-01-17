<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	$xapsep = array(1,22,3,44,25,6,57,8,90,10);
	ksort($xapsep);sort($xapsep);// tang dan
	// rsort($xapsep);arsort($xapsep);// giam dan


	// print_r($xapsep);
	foreach ($xapsep as $xapsep) {
		echo $xapsep;
		echo " /";
	}
	?>
</body>
</html>