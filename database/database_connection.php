<?php
$username = "root";
$password = "root";
$dsn = "mysql:host=localhost;dbname=sampledatabase";


	$db = new PDO($dsn, $username, $password)
	or die("Unable to connect");

	echo "Connected to MySQL<br>";
	
	$statement = $db->prepare("insert into customers(id,name,age,address,date)" . "values(?,?,?,?,?)");
	$statement->execute(array(14,"yahay",10,"kahitsan","kahapon"));

	$statement = null;


	$statement = $db->prepare( "SELECT * FROM customers");
	$statement->execute();
	
	while ($row = $statement->fetch()) {
		echo "ID:" . $row{'id'} . " NAME: " . $row{'name'};
		echo "<br />";
	
	}

?>