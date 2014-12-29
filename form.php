<html>
	<head>
		<title> Personalized Greeting Form </title>
	</head>

	<body>
		<?php if(!empty($_POST['pangalan'])) {
			echo "Greetings, {$_POST['pangalan']}, and welcome.";
		} ?>

	   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	    Enter your name: <input type="text" name="pangalan"/>
	   <input type="Submit" name="ipasa" value="ipasa" />
	   </form>
	</body>
</html>
	
