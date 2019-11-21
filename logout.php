<?php

require('session.php');

//check if session has started and redirect to index page woth lgoin modal
if(isset($_SESSION['email'])){
    session_destroy();

    header('index.php');
}

?>