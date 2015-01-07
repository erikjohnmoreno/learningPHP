
<html>
<head>
	<title>Select Your Color</title>
</head>
<body>
	<form action="prefs_session.php" method="post">
		<p>Background: 
			<select name="background">
				<option value="black">black</option>
				<option value="blue">blue</option>
				<option value="red">red</option>
				<option value="white">white</option>
			</select><br />

			Foreground:
			<select name="foreground">
				<option value="black">black</option>
				<option value="blue">blue</option>
				<option value="red">red</option>
				<option value="white">white</option>	
			</select>
		</p>

		<input type="submit" value="Change Preferences">
	</form>

</body>
</html>