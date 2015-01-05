<?php
//Creating variables from an array
$shape = "round";
$array  = array('cover' => "bird" ,'shape' => "rectangular" );
extract($array, EXTR_PREFIX_ALL, "book");
echo $book_cover;
?>