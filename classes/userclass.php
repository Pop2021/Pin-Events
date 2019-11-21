<?php
//connect to DB class

require('pdbclass.php');


/** 
 * User Class which creates User objects
 */


 class User extends pdbConnection{

    public $firstName = " ";
    public $lastName = " ";
    public $email = " ";
    public $studentID = null;
    //public $yearGroup = null;
    public $password = "";

    
    /**
     * Constructor
     */
    public function __construct($firstName, $lastName, $email, $studentID, $yearGroup, $password){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->studentID = $studentID;
        //$this->yearGroup = $yearGroup;
        $this->password = $password;
        echo __CLASS__." created<br>";

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

    // public function getYearGroup(){
    //     return $this->yearGroup;
    // }

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

    // public function setYearGroup($yearGroup){
    //     $this->yearGroup = $yearGroup;
    // }

    public function setPassword($password){
        $this->password = $password;
    }

    /**
     * User Methods: addNewUser, logIn
     * when signup function is called, user details should get
     *stored in the database
     */

    
    public function addNewUser($firstName, $lastName, $email, $studentID, $password){
        
        //save into database
        $sql = "INSERT INTO User('StudentsID','Firstname', `Lastname`, `Email`,`Password`)VALUES($studentID, $firstName, $lastName, $email, $password)";
        header('Location: index.php');
        
    }

    /**
	 * This function sanitizes the input entered by the user:
	 * Email, Password
	 */

	function sanitizeData($input) {
		$data = trim($input);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);

	}


    /**
     * Log In Method
     */


    public function logIn($email, $password){
        //when logIn is called, user details should be compared with what
        //appears in the existing database
        

            // get the submitted email and password  
                       
            $email = sanitizeData($email);
            $password = sanitizeData($password);
        
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
                $_SESSION["user_info"] = "result";
    
                // redirect user to their dashboard as they have successfully logged in

                header("Location: index.php");
                exit();
              
    }
 } }

?>