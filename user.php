<?php

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
     * User Methods: Sign Up
     */

    
    public function signUp(){
        //when signup function is called, user details should get
        //stored in the database

    }

    /**
     * Log In Method
     */

    public function logIn(){
        //when logIn is called, user details should be compared with what
        //appears in the existing database
    }
 }

?>

<?php
    $user1 = new User("Afua", "Cudjoe", "ac@gmail.com", 9999, 2019, "fish123");
    $user1->setEmail("afua.mkb@gmail.com");
    echo $user1->getEmail();
?>