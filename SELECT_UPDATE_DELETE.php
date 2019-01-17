<?php
	$servername= 'localhost';
	$username ='root';
	$password ='';
	$connect = mysqli_connect($servername,$username,$password);

	if ($connect) {

		echo "kết nối  thành công";
	}else{

		echo "kết nối không thành công .bạn kiểm tra lại đường truyền mạng !";

	}
	$sql = "CREATE DATABASE database_name";

	$connect ->query($sql);
	$connect->query("USE database_name");

	$create = "CREATE TABLE myguest(
		id INT(5) AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(255) NOT NULL)";

	$connect ->query($create);

	$insert ="INSERT INTO myguest(name) VALUES('JOHN TERY')";
	$connect ->query($insert);

	$delete "DELETE FROM myguest WHERE id = 1 ";
	$connect ->query($delete);

