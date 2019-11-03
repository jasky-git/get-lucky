<?php

class History {
    private $id;
    private $venue;
    private $address;
    private $lat;
    private $lng;

    public function __construct($id,$venue,$address,$lat,$lng){
        $this->id = $id;
        $this->venue = $venue;
        $this->address = $address;
        $this->lat = $lat;
        $this->lng = $lng;
    }
}

?>