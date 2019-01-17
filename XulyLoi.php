<?php 
	if (!file_exists('hoanhanh.txt')) {
		// die('FILE not found');
	}else{
		$file = fopen('hoanhanh.txt', 'r');
	}

	 function CustomError($errno,$errstr)
	{
		echo "<b>".date('Y:m:d')."  |ERROR : [$errno] $errstr";
	}
	set_error_handler("CustomError");
	trigger_error("VALUE MUST BE OR BELOW",E_USER_WARNING);
?>
