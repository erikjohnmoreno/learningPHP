<?php
//Accessing methods and properties


class Person
{
	
	public $name = '';

	function __construct($newname, $age){

			$this->name = $newname;

	}


	public function getName()
	{
		return $this->name;

	}

	public function setName($name)
	{
		$this->name = $name;
	}

}

$f = new Person ("Fred", 35);
$b = clone $f;
$b->setName("Barney");

printf("%s and %s are best friends.\n", $b->getName(), $f->getName());


?>