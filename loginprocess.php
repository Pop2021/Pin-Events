<?php

//Initializing the session
session_start();

    //declare variables for my database connection 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "P2021";
	

	//connection 
	$connection = mysqli_connect($servername,$username,$password,$database);

	// Check connection
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}else{
		//echo "Connected to the database<br>";
	}

	//Sanitizing data input

	function sanitizeData($input) {
		$data = trim($input);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);

	}


	//check which button has been clicked
	if (isset($_POST['login'])) {

        // get the submitted email and password  
                   
            $email = sanitizeData($_POST['loginemail']);
            $password = sanitizeData($_POST['loginpword']);
	} 
		// hash user password  
		$password = md5($password);
	  
		//check if user (email) is in the database
		$sql = "SELECT * FROM user WHERE email='".$email."' && password='".$password."'";
		
        //run the query and store result
        $result = mysqli_query($connection, $sql);
		
		//check if user does not exist
		if (mysqli_num_rows($result) == 0) {
			//display error message
			echo "<script> alert('Sorry. User not found. Please try again');
			window.location.href='index.php';</script>";
		}
		else {
			// fetch user email and password if user exists
			$result = mysqli_fetch_assoc($result);
			
			// set retrieved user information in a session variable to be used across multiple pages
			$_SESSION["user_info"] = $result;
			$_SESSION["email"] = $result['Email'];

	        // redirect user to their dashboard as they have successfully logged in
	        header("Location: user-index.php");
	    	
		}

		// close database connection
		mysqli_close($connection);
	
?>