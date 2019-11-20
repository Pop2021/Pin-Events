<?php
//declare variables for my database connection 
	define('SERVERNAME', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'p2021');


	//connection 
	$connection = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DATABASE);

	// Check connection
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}else{
		echo "connected to the database<br>";
	}
    




?>