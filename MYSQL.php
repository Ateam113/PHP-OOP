<?php 
	//cach 1
	$servername= 'localhost';
	$username ='root';
	$password ='';
	$connect = mysqli_connect($servername,$username,$password);
	if ($connect) {
		echo "kết nối  thành công";
	}else{
		echo "kết nối không thành công .bạn kiểm tra lại đường truyền mạng !";

	}


	// cach 2
	// $connect = new PDO("mysql:host=$servername",$username,$password);
	// $connect->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
	// echo "cach 2 keet noi thanh cong";
	mysqli_close($connect);
 ?>