
 <?php 

	function rewrite($text){
		
		return str_replace('testing1.html', 'testing', $text);
	}
	
	
	ob_start('rewrite');
	
	
	
 ?>


 <html>
 <head>
 	<title>WOAH</title>
 </head>
 <body>

 	Visit <a href="testing1.html">THIS</a>
 	
 	<?php  ob_end_flush(); ?>

 	Visit <a href="testing">THE CHANGES</a>
 </body>
 </html>

