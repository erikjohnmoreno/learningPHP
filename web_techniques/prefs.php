
<html>
<head>
	<title></title>
	<?php
$colors = array('black' => "#000000",
 				'white' => "#ffffff",
 				'red' => "#ff0000",
 				'blue' => "0000ff");

$backgroundName = $_POST['background'];
$foregroundName = $_POST['foreground'];


	?>
</head>
<body bgcolor="<?= $backgroundName;?>" text="<?= $foregroundName; ?>" >


<p>Thank you. Your preferences have been changed to: <br />
Background: <?php echo $backgroundName; ?><br />
Foreground: <?php echo $foregroundName; ?></p>
<form action="passing_bg_fg_colors.php" method="post">
	<input type="text" name="passbackground" value = "<?= $backgroundName; ?>" visible=false>
	<input type="text" name="passforeground" value = "<?= $foregroundName; ?>" visible=false>
	<!--<select name='passbackground'>
		<option value="<?= $backgroundName; ?>"></option>
	</select>

	<select name='passforeground'>
		<option value="<?= $foregroundName;?>"></option>		
	</select>-->

	<input type="submit" value="submit">
</form>
	

</body>
</html>

