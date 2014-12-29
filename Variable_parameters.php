<?php
function countlist()
{
	echo func_num_args();
	echo "\t";
	echo func_get_arg(2);

	/*if (func_num_args() == 0) {
		return false;
	}
	else {
		$count = 0;

	 	for ($i = 0; $i <func_num_args(); $i++) {
			$count += func_get_arg($i);
		}
	
		return $count;
	}*/
}

echo countlist(1,20,30);
 


?>
