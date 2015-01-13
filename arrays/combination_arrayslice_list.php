<?php
//combination of array_slice() and list()

$order = array("Tom", "Dick", "Harriet", "Brenda", "Jo");
list($second, $third) = array_slice($order, 1,2);

echo $second;
echo "\n";
echo $third;
?>