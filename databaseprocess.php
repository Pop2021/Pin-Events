<?php
	//declare variables for my database connection
	 
	//Database credentials
	define("DATABASE", "P2021UpdateDB");
	define("SERVER", "localhost");
	define("USERNAME", "root");
	define("PASSWD", "");
	

	//connection 
	$connection = mysqli_connect($servername,$username,$password,$database);

	// Check connection
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}else{
		echo "connected to the database<br>";
	}

	//check which button has been clicked
	if (isset($_POST['login'])) {

        // get the submitted username and password  
                   
            $email = $_POST['email'];
            $username = $_POST['username'];
    }    

        // create sql query to select user from database
        $sql = "SELECT username, email FROM User";

        //run the query and store result
        $result = $connection->query($sql);
		
		//check if results were retrieved
		if (($result->num_rows) = 0) {
            // display error message
            

		} else {
            // fetch result as an array
	        
	        // display result
	    	
		}

		// close database connection

	} else if (isset($_POST['rclicked'])) {

		// get the submitted username and password

		// create sql query to insert user into the database

		//run the query and store result
		
		//check if results were retrieved
		if () {
	    	// redirect user to login page
		} else {
	    	// redirect user to register page

			// display error
		}

		// close database connection

	}
?>