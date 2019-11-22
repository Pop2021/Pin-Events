<?php

require_once('../classes/eventsclass.php');


//Sanitizing data input
function sanitizeData($input) {
    $data = trim($input);
    $data = stripslashes($data);
	$data = htmlspecialchars($data);
	
	return $data;
}

//check which button has been clicked and then proceed to validate credentials
if (isset($_POST['deleteevent'])) {

	//get the submitted event details
    $eventName = sanitizeData($_POST['eventName']);
    
	//add event to the database
	$event = new Event ($eventName, NULL, NULL, NULL, NULL, NULL);
	$event->deleteEvent();

	header('Location: admindelete.php');
	exit();
}

?>