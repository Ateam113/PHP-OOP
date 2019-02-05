<?php 
	$servername='localhost';
	$username='root';
	$password='';
	$connect =mysqli_connect($servernam,$username,$password);
	if ($connect) {
		echo "Connect sucsess!";
	}else
		{
			echo "Conect fail!";
		}
	echo '<br>';
	// $connect->query("USE database_name");
	// $id ="'' or 1=1";//// day chinh laf sql_injection
	// $id=intval($id);
	// $sql = "SELECT *FROM myguest WHERE id =";



	// $result =$connect->query($sql);
	// while ($row =$result->fetch_assoc()) {
	// 	echo 'ID'.$row['id'].'<br>';
	// }


	echo '<br>';
	$connect->query("USE database_name");
	$id ="'' of 1=1";//// day chinh la sql_injection
	$sql = "SELECT *FROM myguest WHERE id =?";
	$stmt =$connect->prepare($sql);
	$stmt->bind_param('i',$id);
	$stmt->execute();

	$result =$stmt->get_result();
	while ($row = $result ->fetch_assoc()) {
		echo 'ID'.$row['id'].'<br>';
	}



?>	
