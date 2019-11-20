<?php

//Get form data
$searchterm = $_POST['sterm']; 
# execute the function
ajaxsearch($searchterm);


function ajaxsearch($shterm){
    
    //database connection variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "p2021";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);



    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    //write sql
    $sql = "SELECT eventName FROM events WHERE eventName LIKE '%$shterm%'";
    //execute sql
	$result = $conn->query($sql);

    
//// Generate array with skills data 
//$skillData = array(); 
//if($sql->num_row > 0){ 
//    while($row = $sql->fetch_assoc()){ 
//        $data['id'] = $row['id']; 
//        $data['value'] = $row['eventName']; 
//        array_push($skillData, $data); 
//}
//}



//check if any result was returned
    if ($result->num_rows > 0) 
    {
    //looping - output data of each row
        while($row = $result->fetch_assoc()) 
        {
            echo $row["eventName"]. "<br>";
        
        }
    } 
    else 
    {
        echo "0 results";
    }
    $conn->close();

    
} 


?>