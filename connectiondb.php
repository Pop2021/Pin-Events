<?php
//declare variables for my database connection 
	define('SERVERNAME', 'cs.ashesi.edu.gh');
	define('USERNAME', 'lenry_neequaye');
	define('PASSWORD', 'lenry_neequaye');
	define('DATABASE', 'webtech_fall2019_lenry_neequaye');


	//connection 
	$connection = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DATABASE);

	// Check connection
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}else{
		echo "connected to the database<br>";
	}
    




?>