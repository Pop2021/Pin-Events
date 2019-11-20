<?php

 //Getting form data
 if (isset($_POST['signup_page'])){

    //echo "works";
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $index = $_POST['index'];
    $email = $_POST['email'];
        //$yeargroup = $_POST['yGroup'];
    $password = $_POST['pword'];


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

if (isset($_POST['signup_page'])) {

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