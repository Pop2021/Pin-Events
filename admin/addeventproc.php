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
if (isset($_POST['addevent'])) {

	//get the submitted event details
	$eventName = sanitizeData($_POST['eventName']);
	$eventVenue = sanitizeData($_POST['eventVenue']);
	$eventDate = sanitizeData($_POST['eventDate']);	   
	$startTime = sanitizeData($_POST['startTime']);
    $endTime = sanitizeData($_POST['endTime']);
    $eventDesc = sanitizeData($_POST['eventDesc']);

	//add event to the database
	$event = new Event ($eventName, $eventVenue, $eventDate, $startTime, $endTime, $eventDesc);
	$event->addEvent();

	// header('Location: adminhome.php');
	// exit();
}

?>