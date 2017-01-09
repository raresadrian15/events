<?php
include('user.php');
class Event{
    private $eventId;
    private $eventName;
    private $eventCategory;
    private $total_seats_number;
    private $anveable_seats_number;
    private $date;
    private $organizator;
    private $image;
    private $eventDescription;
    private $eventLocation;


    public function __construct($eventId, $eventName, $eventCategory, $total_seats_number,
                                $anveable_seats_number, $date, $organizator, $image, $eventDescription, $eventLocation){
        $this->eventId=$eventId;
        $this->eventName=$eventName;
        $this->eventCategory=$eventCategory;
        $this->total_seats_number=$total_seats_number;
        $this->anveable_seats_number=$anveable_seats_number;
        $this->date=$date;
        $this->organizator=$organizator;
        $this->image=$image;
        $this->eventDescription=$eventDescription;
        $this->eventLocation=$eventLocation;
    }
    public function getEventName(){
        return $this->eventName;
    }
    public function getImage(){
        return $this->image;
    }
    function displayEvent(){
        if(1==1)return true;
        else return false;
    }
    function getEventDetails(){
        return "event details";
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }
}
?>