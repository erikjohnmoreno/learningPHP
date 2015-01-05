<?php
function outer ($a)
{
	function inner ($b)
	{
		echo "there $b";
	}

	echo "$a, hello";
}

outer("well");
inner("reader");

?>
