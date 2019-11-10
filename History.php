<?php

class History {
    public $venueId;
    public $userId;
    public $venue;
    public $title;
    public $address;
    public $lat;
    public $lng;
    public $datee;

    public function __construct() {
        $get_arguments = func_get_args();
        $number_of_arguments = func_num_args();
        
        if (method_exists($this, $method_name = '__construct'.$number_of_arguments)) {
            call_user_func_array(array($this, $method_name), $get_arguments);
        }
    }

    public function __construct2($date, $title) {
        $this->date = $date;
        $this->title = $title;
    }
    
    public function __construct5($venueId, $venue, $address, $lat, $lng) {
        $this->venueId = $venueId;
        $this->venue = $venue;
        $this->address = $address;
        $this->lat = $lat;
        $this->lng = $lng;
    }

    public function __construct8($venueId,$venue,$address,$lat,$lng,$title,$date,$userId){
        $this->venueId = $venueId;
        $this->venue = $venue;
        $this->address = $address;
        $this->lat = $lat;
        $this->lng = $lng;
        $this->title = $title;
        $this->datee = $datee;
        $this->userId = $userId;
    }
}

?>