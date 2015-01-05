<?php
function titlecase($s)
{
	return ucfirst(strtolower($s[0]));


}

$string = 'goodbye cruel world';
$new = preg_replace_callback('/\w+/', 'titlecase', $string);
echo $new;

?>