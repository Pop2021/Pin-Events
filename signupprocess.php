<?php

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
}
else{
    //echo "Connected to the database<br>";
}

// Initialize variables to null.
$fnameError ="";
$lnameError ="";
$idError ="";
$emailError ="";
$passwordError ="";

//Sanitizing data input
function sanitizeData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
}

//Getting and validating form data
if(isset($_POST['signup_page'])){
    
    //check if first name is valid
    if (empty($_POST["fname"])) {
		$fnameError = " * First name is required";
	} else {
        $fname = sanitizeData($_POST["fname"]);
        
        //check first name only contains letters and whitespace
		if (!preg_match("/^([0-9 A-Z a-z]+[\.-]*[a-z 0-9 \-]+)$/", $fname)) {
			$fnameError = " * Only letters and white space allowed"; 
		}
    }
    
    //check if last name is valid
    if (empty($_POST["lname"])) {
		$lnameError = " * Last name is required";
	} else {
        $lname = sanitizeData($_POST["lname"]);
        
        //check last name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
			$lnameError = " * Only letters and white space allowed"; 
		}
    }

    //check if student ID is valid
	if (empty($_POST["studID"])) {
		$idError = " * Email is required";
	} else {
        $studID = sanitizeData($_POST["studID"]);
        
        //check if student ID is valid or not
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$studID)) {
			$idError = " * Invalid Student ID";
		}
	}

    //check if email is valid
	if (empty($_POST["email"])) {
		$emailError = " * Email is required";
	} else {
        $email = sanitizeData($_POST["email"]);
        
        //check if e-mail address syntax is valid or not
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
			$emailError = " * Invalid email format";
		}
	}

    //check if password is valid
	if (empty($_POST["password"])) {
		$passwordError = " * Please enter a password";
	} else {
        $password = sanitizeData($_POST["pword"]);	
        	
	    //check if password is valid or not
		if (!preg_match_all("/[A-Za-z0-9\W]+/g/",$password)) {
			$password = " *  Please check your password"; 
		}
    }
}

?>