<?php 
	
	/**
	* 
	*/
	class Book 
	{
		var $price;
		var $title;
		var $year;
		function __construct($price,$year,$title){
			echo "Ham khoi tao";
			$this->price =$price;
			$this->title=$title;
			$this->year=$year;
		}
		function __destruct(){

			
		}
		
		 function setPrice($p){
			$this->price=$p;
		}
		 function getPrice()
		{
			echo $this->price;
		}
	}
	$book = new Book(15000,2000,'neu  toi duoc biet khi con 20');
	$book->getPrice();

 ?>