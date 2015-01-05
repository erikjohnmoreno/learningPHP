<?php
	$title = "    Programming PHP woah \n";
	$str1 = ltrim($title); 	// $str1 is "Programming PHP \n"
	$str2 = rtrim($title); 	// $str2 is "   Programming PHP"
	$str3 = trim($title); 	// $str3 is "Programming PHP"
	$str4 = trim($title, "");
echo "$str1","$str2\n", "$str3\n", "$str4";
?>