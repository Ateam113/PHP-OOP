<?php 

    $servername ='localhost';
    $username='root';
    $password ='';
	$connect = mysqli_connect($servername,$username,$password);
	if ($connect) {
		echo " Connect Success! ";
	}else{
		echo "Connect faild";
	}
	$connect ->query("USE database_name");
	$sql="SELECT id ,name FROM myguest";
	$result = $connect->query($sql);
	while ($row =$result->fetch_assoc()) {
		echo "id: ".$row['id']. '-Name '.$row['name'];
		echo '<br>';
	}
	$sql = "UPDATE myguest SET name ='Birthney spear' WHERE id = 2 ";
	$connect->query($sql);
	$sql="SELECT id ,name FROM myguest LIMIT 1";
	$result = $connect->query($sql);
	while ($row =$result->fetch_assoc()) {
		echo "id: ".$row['id']. '-Name '.$row['name'];
		echo '<br>';
	}

 ?>