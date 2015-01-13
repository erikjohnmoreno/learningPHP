<?php
//abstract methods

abstract class Component 
{
	//can be implemented with new or overwrite
	abstract function printOutput()
	
}



class ImageComponent extends Component
{
	
	function printOutput(){

		echo "Pretty picture";

	}
}
?>