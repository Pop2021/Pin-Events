<?php

//connect to DB class
include_once($_SERVER['DOCUMENT_ROOT']."/PinEvents/settings/pdbclass.php");

/**
  * Event Class which creates Event objects
  */
class Event extends pdbConnection{ 

  // property declaration
  public $eventName = " ";
  public $eventVenue = " ";
  public $eventDate = " ";
  public $startTime = " ";
  public $endTime = " ";
  public $eventDesc = " ";

  /**
   * Constructor
   */
  public function __construct($eventName, $eventVenue, $eventDate, $startTime, $endTime, $eventDesc){
    parent::__construct();
    $this->eventName = $eventName;
    $this->eventVenue = $eventVenue;
    $this->eventDate = $eventDate;
    $this->startTime = $startTime;
    $this->endTime = $endTime;
    $this->eventDesc = $eventDesc;
    $this->connect();
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
  public function getEventName(){
    return $this->eventName;
  }

  public function getEventVenue(){
    return $this->eventVenue;
  }

  public function getDate(){
    return $this->eventDate;
  }

  public function getStartTime(){
    return $this->startTime;
  }

  public function getEndTime(){
    return $this->endTime;
  }

  public function getEventDesc(){
    return $this->eventDesc;
  }

  /**
   * Setters
   *
   * @param
   * @return void
   */
  public function setEventName($eventName){
    $this->eventName = $eventName;
  }

  public function setEventVenue($eventVenue){
    $this->eventVenue = $eventVenue;
  }

  public function setEventDate($eventDate){
    $this->eventDate = $eventDate;
  }

  public function setStartTime($startTime){
    $this->startTime = $startTime;
  }

  public function setEndTime($endTime){
    $this->endTime = $endTime;
  }

  public function setEventDesc($eventDesc){
    $this->eventDesc = $eventDesc;
  }

  /**
   * Events Methods: addEvent, updateEvent, deleteEvent 
  */

  //Add event
  function addEvent(){

    //save into database
    $sql = "INSERT INTO Events (eventName, Venue, Date, StartTime, EndTime, Description) VALUES(?, ?, ?, ?, ?, ?)";

    $statement = mysqli_prepare($this->connection, $sql);

    $statement->bind_param("ssssss", $this->eventName, $this->eventVenue, $this->eventDate, $this->startTime, 
    $this->endTime, $this->eventDesc);

    $result = $statement->execute();
    echo $result;

    $statement->close();
  }

  //Delete event
  function deleteEvent(){

    $sql = "DELETE FROM Events WHERE eventName = ?";

    $statement = mysqli_prepare($this->connection, $sql);

    $statement->bind_param("s", $this->eventName);

    $result = $statement->execute();

    $statement->close();
  }

  function getAllEvents(){
    
    //get all events from db
    $sql = "SELECT * FROM Events";

    $this->execute_query($sql);

    return $this->get_query_result();

  }

}
?>