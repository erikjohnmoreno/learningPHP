<?php
session_start();
$folder = $_SESSION['folder'];
$filename = $folder . "/question.txt";

$file_handle = fopen($filename, "a+");

$comments = fread($file_handle, filesize($filename));
fclose($file_handle);

if ($_POST['posted']) {
	$question2 = $_POST['question2'];
	$file_handle = fopen($filen, "w+");

	if (flock($file_handle, LOCK_EX)) {
		if (fwrite($file_handle, $question2)==FALSE) {
			echo "Cannot write to file ($filename)";
		}
		flock($file_handle, LOCK_UN);
	}
	header("Location: last_page.php");

}else{

?>


<html>
<head>
	<title>Files & folders - On-line Survey</title>
</head>
<body>

	<table border="0" >
	<tr><td>Please enter your comments to the following survery statement:</td></tr>
	<tr bgcolor="lightblue"><td>It's a funny thing freedom.</td></tr>	
	<tr><td>
		<form action="<?php echo $_SERVER['PHP_SELF'];?> " method="POST"></form>
		<input type="hidden" name="posted" value=1>
		<br />
		<textarea name="question2" rows=12 cols=35> <?php echo $comments ?></textarea>
		</form>
	</td></tr>
	<tr><td>
		<input type="submit" name="submit" value="Submit">
	</td></tr>
	</table>

</body>
</html>

<?php } ?>