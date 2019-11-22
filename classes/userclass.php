<?php

//connect to DB class
include_once('../settings/pdbclass.php');


/** 
 * User Class which creates User objects
 */


 class User extends pdbConnection{

    public $firstName = " ";
    public $lastName = " ";
    public $email = " ";
    public $studentID = null;
    public $password = "";

    
    /**
     * Constructor
     */
    function __construct($firstName, $lastName, $email, $studentID, $password){
        parent::__construct();
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->studentID = $studentID;
        $this->password = $password;
        $this->connect();
    

    }

    /**
     * Deconstructor
     */

    public function __deconstruct(){
        echo __CLASS__." destroyed<br>";
    }


/**
 * Getters & Setters 
 **/

 /**
  * Getters
  *
  * @param [type] $firstName
  * @return void
  */
    public function getfName(){
        return $this->firstName;
    }

    public function getlName(){
        return $this->lastName;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getID(){
        return $this->studentID;
    }

    public function getPassword(){
        return $this->password;
    }
/**
 * Setters
 *
 * @param [type] $firstName
 * @return void
 */
    public function setfName($firstName){
        $this->firstName = $firstName;
    }

    public function setlName($lastName){
        $this->lastName = $lastName;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setID($studentID){
        $this->studentID = $studentID;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    /**
     * User Methods: addNewUser, logIn
     * when signup function is called, user details should get
     *stored in the database
     */

    
    function addNewUser(){
        
        //save into database
        $sql = "INSERT INTO User (StudentsID, Firstname, Lastname, Email, Password) VALUES(?, ?, ?, ?, ?)";

        $statement = mysqli_prepare($this->connection, $sql);

        $statement->bind_param("sssss", $this->studentID, $this->firstName, $this->lastName, $this->email, $this->password);

        $result = $statement->execute();

        $statement->close();

        //echo $result;
        //header('Location: ../view/user-index.php');
        return $result;
    }

    /**
	 * This function sanitizes the input entered by the user:
	 * Email, Password
	 */

	public function sanitizeData($input) {
		$data = trim($input);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);

	}


    /**
     * Log In Method
     */
 
    function usercheck() {
     
        $sql = "SELECT * FROM User WHERE Email='".$this->email."' && Password='".$this->password."'";
		
	
        //run the query and store result
        $result = mysqli_query($this->connection, $sql);
		
		//check if user does not exist
		if (mysqli_num_rows($result) == 0) {
			
			echo "<script> alert('Sorry. User not found. Please try again');
			window.location.href='../index.php';</script>";
		}
		else {
			// fetch user email and password if user exists
			$result = mysqli_fetch_assoc($result);
			
			// set retrieved user information in a session variable to be used across multiple pages
			$_SESSION["user_info"] = $result;
			$_SESSION["email"] = $result['Email'];

	        // redirect user to their dashboard as they have successfully logged in
	        header("Location: view/user-index.php");
	    	
		}

		// close database connection
		
		exit();
 }

}

?>