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

//Sanitizing data input
function sanitizeData($input) {
    $data = trim($input);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
}

    
//Getting form data
if (isset($_POST['signup_page'])){
  
    $firstName = sanitizeData($_POST['fname']);
    $lastName = sanitizeData($_POST['lname']);
    $index = sanitizeData($_POST['index']);
    $email = sanitizeData($_POST['email']);
    $password = sanitizeData($_POST['pword']);
}
    
//Validating and Inserting into the Database

?>