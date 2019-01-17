<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DATE $ time</title>
</head>
<body>
	<?php  
	$date =date('Y.m.d');
	echo  "Hôm nay là ngày ".$date .'<br>';
	echo "5 ngày nữa là ngày ";
	echo date('Y.m.d',strtotime('+5 days')).'<br>';
	echo "5 tháng nữa là ngày ";
	echo date('Y.m.d',strtotime('+5 month')).'<br>';
	echo "2 tháng trước là ngày ";
	echo date('Y.m.d',strtotime('-2 month')).'<br>'
	 ?>
</body>
</html>