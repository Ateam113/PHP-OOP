<?php 
/**
* 
*/
class Book {

	var $price;
	var $title;
	var $year;
	function setPrice($p)
	{
		$this->price =$p;
	}
	function getPrice()
	{
		echo $this->price;
	}
}

$book = new Book();
$book->setprice(1000000);
$book->getPrice();

 ?>