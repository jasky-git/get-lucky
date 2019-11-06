<?php

class History {
    public $historyid;
    public $venueid;
    public $userid;
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

    public function __construct2($datee,$venue) {
        $this->datee = $datee;
        $this->venue = $venue;
    }

    public function __construct5($id,$venue,$address,$lat,$lng){
        $this->id = $id;
        $this->venue = $venue;
        $this->address = $address;
        $this->lat = $lat;
        $this->lng = $lng;
    }
}

?>