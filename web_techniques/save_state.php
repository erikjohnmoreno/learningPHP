<?php
print_r($_POST['bgcolor']);
print_r($_COOKIE);
if ($_POST['bgcolor']) {
	setcookie('bgcolor', $_POST['bgcolor'], time() + (60 *60 *24 *7));
					
}

if (isset($_POST['bgcolor'])) {
	$backgroundName = $_POST['bgcolor'];
}
else if (isset($_COOKIE['bgcolor'])) {
	$backgroundName = $_COOKIE['bgcolor'];
}
else {
	$backgroundName = "red";
}

//print_r($_COOKIE);
?>
<html>
	<head><title>Save It</title></head>
	<body bgcolor="<?php echo $backgroundName; ?>">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<p>Background color:
			<select name="bgcolor">
				<option value="red">Red</option>
				<option value="white">White</option>
				<option value="black">Black</option>
				<option value="blue">Blue</option>
				<option value="green">Green</option>
				<option value="gray">Gray</option>
			</select></p>
			<input type="submit" />
		</form>
	</body>
</html>
