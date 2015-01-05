<?php
$row0 = array(1, 2, 3);
$row1 = array(4, 5, 6);
$row2 = array(7, 8, 9);
$multi = array(	'row0' => $row0, 
				'row1' => $row1, 
				'row2' => $row2);

$value = $multi['row0'][0];
echo "$value\n";


?>