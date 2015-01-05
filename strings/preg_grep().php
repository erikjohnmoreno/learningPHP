<?php

$filenames = array('name' => "WOAH.txt", 'date' =>"kahapon" );

$matching = preg_grep('/\.txt$/',$filenames);

print_r($matching);


?>