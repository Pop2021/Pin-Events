<?php

require_once('../classes/userclass.php');

//Initializing the session
session_start();

function sanitizeData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
}

	//check which button has been clicked and then proceed to validate credentials
	if (isset($_POST['login'])) {
		

        // get the submitted email and password  
                   
        $email = sanitizeData($_POST['loginemail']);
        $password = sanitizeData($_POST['loginpword']);
	} 
		// hash user password  
		$password = md5($password);
	  
		//check if user (email) is in the database
		$user = new user (null, null, $email, null, null, $password);
		$user->usercheck();



	
?>