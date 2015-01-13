<?php

$image = imagecreatetruecolor(256, 180);

for ($x=0; $x < 256; $x++) { 
	imageline($image, $x, 0, 255-$x, 59, $x);
	imageline($image, 128-$x, 60, $x+64, 119, $x<<16);
//	imageline($image, 512-$x, 20, 512-$x, 39, $x << 8);
	//imageline($image, $x, 40, $x, 59, $x<<16);
}

header("Content-Type: image/png");
imagepng($image);

?>