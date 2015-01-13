<?php
//Interface
interface Printable{
	function printOutput();

}

/**
* 
*/
class ImageComponent implements Printable
{
	
	function printOutput()
	{
		echo "Printing an image...";
	}
}

$a = new ImageComponent;

printf ("%s \n", $a->printOutput());


?>