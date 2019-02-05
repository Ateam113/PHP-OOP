<?php 
class Book {

	public $price;
	private $title;
	private $year;

	function setPrice($p)
	{
		$this->price=$p;
	}
	function setYear($y){
		$this->year=$year;
	}
	function setTitle($t){
		$this->title=$t;
	}
	function getPrice(){
		$this->price=$price;
	}


	function display(){
		echo 'PRICE :'.$this->price.'<br>';
		echo 'TITLE :'.$this->title.'<br>';
		echo 'YEAR :'.$this->year.'<br>';
	}


}
$book = new Book();
$book->price ='10000';
$book->setYe
$book->display();
?>