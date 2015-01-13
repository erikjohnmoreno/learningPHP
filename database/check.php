<?php
print_r($_POST['posted']);
print_r($_POST['email']);

?>


<html>
<head>
<title>Files & folders - On-line Survey</title>
</head>
<body bgcolor="white" text="black">
<h2>Survey Form</h2>
<p>Please enter your e-mail address to start recording your comments</p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="hidden" name="posted" value="1">
<p>Email address: <input type="text" name="email" size="45" /><br />
<input type="submit" name="submit" value="Submit"></p>
</form>
</body>
</html>
