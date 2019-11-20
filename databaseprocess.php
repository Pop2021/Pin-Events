<?php
session_start();

    //declare variables for my database connection 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "P2021UpdateDB";
	

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
		if ((mysqli_num_rows($result)) == 0) {
            // display error message
            

		} else {
            // fetch result as an array
	        
	        // display result
	    	
		}

		// close database connection
		$connection->close();

	//} else if (isset($_POST['signup_page'])) {

		// get the submitted username and password
		$email = $_POST['email'];
		$username = $_POST['username'];

		// create sql query to insert user into the database
		$sql = "SELECT username, email FROM User";

		//run the query and store result
		$result = $connection->query($sql);

		//check if results were retrieved
		if (mysqli_num_rows($result)) {
			// redirect user to login page using a session
			
		} else {
	    	// redirect user to register page  using a session

			// display error
		}

		// close database connection
		$connection->close();

	
?>