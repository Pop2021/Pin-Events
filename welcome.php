
<?php



    //echo " Welcome " .$firstName;

    //Check required fields

    if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($index) && !empty($password)){
        //echo "Passed";
        /**Check user inputs */
        if (filter_var($firstName, FILTER_SANITIZE_STRING)){
            echo "Great! <br>";
        }else{
            echo $firstName. " is invalid <br>";
        } 
        //var_dump(filter_var($index, FILTER_SANITIZE_STRING));
        
         //sanitizing last name   
        if (filter_var($lastName, FILTER_SANITIZE_STRING)){
            echo "Great! <br>";
        }else{
            echo $lastName. " is invalid <br>";
        }
        
         ///Validating Index
         if(filter_var($index, FILTER_VALIDATE_INT)){
            echo "Great! <br>";
        }else{
            echo $index. " is invalid <br>";
        }
        var_dump(filter_var($index, FILTER_SANITIZE_NUMBER_INT));
        // //Validating email
        // if (filter_has_var(INPUT_POST, 'email')){
        //     $email = $_POST['email'];
        
            //Removing illegal characters
    
        
            if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo 'Great! <br>';
            } else{
                echo  $email.' is invalid <br>';
            }
        }
        //var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));  
        
        
        
        //validating password
        if (filter_var($password, FILTER_SANITIZE_STRING)){
            echo "Great! <br>";
        }else{
            echo $password. " is invalid <br>";
        }
        
    }else{
        echo "All fields are required";
    }

    /**Allowing the form values to remain if they are correct */
    //echo isset($_POST[''])


    

     


     




    
?>
