<?php
class Person
{
	public $name = '';
	
	function name ($newname = NULL)
	{
		if (!is_null($newname)) {
			$this->name = $newname;
		}
		
		return $this->name;
	}
}

$yow = new Person;
$yow->name('ERIK');
echo "Hello, {$yow->name}\n";

?>
