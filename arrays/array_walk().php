<?php

function printRow($value, $color){
	echo "<tr>\n<td bgcolor=\"{$color}\">{$value}</td>";
	echo "<td bgcolor=\"{$color}\"></td>\n</tr>\n";

}

$person = array('name' => "Fred", 'age' => 35, 'wife' => "wilma");
$experiment = array("HI ERIK YOW");
echo "<table border\"1\">";

array_walk($experiment, "printRow", "blue");
echo "</table>";

?>