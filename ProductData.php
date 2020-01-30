<?php

class ProductData 
{	private $id;
	private $name;
	private $lastname;
	private $year;
	
	function __construct($newId=0,$newName="",$newLastname="",$newYear=""){
		$this->id=$newId;
		$this->name=$newName;
		$this->lastname=$newLastname;
		$this->year=$newLastname;
	}

	function getId(){return $this->id;}
	function getName(){return $this->name;}
	function getLastName(){return $this->lastname;}
	function getYear(){return $this->year;}

	function setName($newName){$this->name=$newName;}
	function setLastName($new_Lname){$this->lastname=$new_Lname;}
	function setYear($newYear){$this->year=$newYear;}

	
}

?>