<?php

class sampleClassA	
{
	


	function niceFunction()
	{

		echo "I'm in nice Function";
	}

	function coolFunction()
	{
		echo"I'm in cool Function";
	}

}

/**
* 
*/
class sampleClassB extends sampleClassA
{
	


	function uglyFunction()
	{
		echo "I'm in ugly Function";
	}

	function notniceFunction()
	{
		echo "I'm not nice Function";
	}

	function etoPa()
	{
		echo "isa pa";
	}

}

class Introspection 
{
//introspection
	// return an array of callable methods (include inherited methods)
	function getCallableMethods($object)
	{
		//get_class accepts $object and returns the class name 
		//get_class_methods accepts class name or object and returns an array of method names
		$methods = get_class_methods(get_class($object));

		//get_parent_class returns name of parent class
		if (get_parent_class($object)) {
			// parent_methods = list of methods of class where the parent class of $object is located
			$parent_methods = get_class_methods(get_parent_class($object));
			//$methods = methods that are not present in $methods
			$methods = array_diff($methods, $parent_methods);

		}
		return $methods;
	}

	//return an array of inherited methods
	function getInheritedMethods($object)
	{
		$methods = get_class_methods(get_class($object));

		if (get_parent_class($object)) {
			$parentMethods = get_class_methods(get_parent_class($object));
			$methods = array_intersect($methods, $parentMethods);	
			
		}
		return $methods;
	}

	//return an array of superclasses
	function getLineage($object)
	{
		if (get_parent_class($object)) {
			$parent = get_parent_class($object);
			$parentObject = new $parent;

			$lineage = getLineage($parentObject);
			$lineage[] = get_class($object);
		}
		else {
			$lineage = array(get_class($object));
		}
		return $lineage;
	}

	//return an array of subclasses
	function getChildClasses($object)
	{
		$classes = get_declared_classes();

		$children = array();

		foreach ($classes as $class) {
			if (substr($class, 0, 2) == '__') {
				continue;
			}

			$child = new $class;

			if (get_parent_class($child) == get_class($object)) {
				$children[] = $class;
			}
		}
		return $children;
	}
}

$object = new sampleClassB;

$tryIntrospection = new Introspection;
print_r($tryIntrospection->getCallableMethods($object));

?>