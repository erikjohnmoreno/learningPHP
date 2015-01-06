<?php
/**
* 
*/
class Person
{
	public $name, $address, $age;
	function __construct($name, $address, $age)
	{
		$this->name = $name;
		$this->address = $address;
		$this->age = $age;			
	}
}

/**
* 
*/
class Employee extends Person
{
	public $position, $salary;
	function __construct($name, $address, $age, $position, $salary)
	{
		parent::__construct($name, $address, $age);

		$this->position = $position;
		$this->salary = $salary;


	}
}

$first = new Employee("ERIK", "DITO", "22", "NAKATAYO", "MALAKI");

printf("Name is %s \n", $first->name);
print($first->address . "\n" );
printf("Position ay %s \n", $first->position);

?>