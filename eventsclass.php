<?php 
/**
  * 
  */
  class events 
  {
      // property declaration
    public $eventName = '';
    public $eventVenue = "";
    public $eventDate ="";


    /**
     * Constructor
     */
    public function __construct($eventName, $eventVenue, $eventDate, $eventStartTime, $eventEndTime){
        $this->Name = $eventName;
        $this->Venue = $eventVenue;
        $this->Date = $eventDate;
        $this->StartTime = $eventStartTime;
        $this->EndTime = $eventStartTime;
        echo __CLASS__." created<br>";
      }


    public function getName(){
        return $this->Name;
    }

    public function getVenue(){
        return $this->Venue;
    }

    public function getDate(){
        return $this->Date;
    }

    public function getStartTime(){
        return $this->StartTime;
    }

    public function getEndTime(){
        return $this->EndTime;
    }


  }
?>