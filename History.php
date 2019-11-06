<?php

class History {
    private $venueId;
    private $venue;
    private $address;
    private $lat;
    private $lng;
    private $title;
    private $date;
    private $userId;

    public function __construct($venueId,$venue,$address,$lat,$lng,$title,$date,$userId){
        $this->venueId = $venueId;
        $this->venue = $venue;
        $this->address = $address;
        $this->lat = $lat;
        $this->lng = $lng;
        $this->title = $title;
        $this->date = $date;
        $this->userId = $userId;
    }
}

?>