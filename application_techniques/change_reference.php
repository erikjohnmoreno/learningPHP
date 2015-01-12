<?php 
	ob_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
  Visit <a href="testing1.html">this</a>
  COOL

<?php 
 	$contents = ob_get_contents();
 	echo $contents;
 	ob_end_clean();
 	echo str_replace('testing1.html', 'testing', $contents);
  ?>

  <!--Visit <a href="testing"> changed</a>-->
</body>
 </html>