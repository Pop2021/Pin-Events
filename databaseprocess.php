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

	//Sanitizing data input

	function sanitizeData($input) {
		$data = trim($input);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);

	}


	//check which button has been clicked
	if (isset($_POST['login'])) {

        // get the submitted email and password  
                   
            $email = sanitizeData($_POST['email']);
            $password = sanitizeData($_POST['password']);
	} 
		// hash user password before looking it up in the database
		$password = md5($password);
	  

        // create sql query to select user from database
        $sql = "SELECT * FROM user WHERE email='$email' && password='$password'";
        //run the query and store result
        $result = mysqli_query($connection, $sql);
		
		//check if results were retrieved
		if (mysqli_num_rows($result) = 0) {
			//display error message
            echo "Sorry. User not found. Please try again.";
		} else {
			// fetch result as an array
			$result = mysqli_fetch_assoc($result);
			
			// set retrieved user information in a session variable to be used across multiple pages
			$_SESSION["user_info"] = "result";

	        // redirect user to their dashboard as they have successfully logged in
	        header("Location: index.php");

	        // display result
	    	
		}

		// close database connection
		mysqli_close($connection);

	else if (isset($_POST['signup_page'])) {

		// get the submitted username and password
		$email = $_POST['email'];
		$username = $_POST['password'];

		// encrypt password before storing to database

		// create sql query to insert user into the database
		$sql = "INSERT INTO user (Username,Password) VALUES('$name','$password')";

		//run the query and store result
		$result = mysqli_query($connection, $sql);

		//check if results were retrieved
		if (mysqli_num_rows($result)) {
			// redirect user to login page using a session
			header("Location: login.php");
		} else {
	    	// redirect user to register page  using a session
            header("Location: index.php");
			// display error
			echo"Registration Failed. Please try again.";
		}

		// close database connection
		$connection->close();

	}

	
?>