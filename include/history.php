<?php

class history {
  // property declaration
  public $historyid;
  public $id;
  public $venue;
  public $address;
  public $lat;
  public $lng;

	public function __construct($venue='', $address='') {
      $this->venue = $venue;
      $this->address = $address;
  }

  public function __construct($venue='', $address='', $lat='', $lng='') {
      $this->venue = $venue;
      $this->address = $address;
      $this->lat = $lat;
      $this->lng = $lng;
  }
}

?>