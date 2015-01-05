<?php
	
$input = 'The <b>bold</b> tags will <i>stay</i><p>';
$output = strip_tags($input,"<b>");
echo "$output\n";
?>