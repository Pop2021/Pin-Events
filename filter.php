<?php

/**
 *  VALIDATING AND SANITIZING USER INPUT
 */

 //INSTEAD OF REGEX, this can be used to check for all user inputs
 //sanitizing first name
 if (filter_var($firstName, FILTER_SANITIZE_STRING)){
    echo "Great!";
}else{
    echo $firstName. " is invalid";
}
//var_dump(filter_var($index, FILTER_SANITIZE_STRING));

 //sanitizing last name   
if (filter_var($lastName, FILTER_SANITIZE_STRING)){
    echo "Great!";
}else{
    echo $lastName. " is invalid";
}

//Validating email
if (filter_has_var(INPUT_POST, 'email')){
    $email = $_POST['email'];

    //Removing illegal characters
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email.'<br>';

    if (filter_var($email, 'email', FILTER_VALIDATE_EMAIL)){
        echo 'Great!';
    } else{
        echo  $email.' is invalid';
    }
}
//var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));  

 ///Validating Index
if(filter_var($index, FILTER_VALIDATE_INT)){
    echo "Great!";
}else{
    echo $index. " is invalid";
}
var_dump(filter_var($index, FILTER_SANITIZE_NUMBER_INT));

///validating yeargroup
if(filter_var($yeargroup, FILTER_VALIDATE_INT)){
    echo "Great!";
}else{
    echo $yeargroup. " is invalid";
}
var_dump(filter_var($yeargroup, FILTER_SANITIZE_NUMBER_INT));

//validating password
if (filter_var($password, FILTER_SANITIZE_STRING)){
    echo "Great!";
}else{
    echo $password. " is invalid";
}

/**
 * For multiple fields
 */

//  $filters = array(
//      "email" => FILTER_VALIDATE_EMAIL,
//      "index" => array(
//          "filter" => FILTER_VALIDATE_INT,
//          "options" => array(
//              "min_range" => 1,
//              "max_range" => 100
//          )

//      )
//          );
//          print_r(filter_input_array(INPUT_POST, $filters));
         
?>