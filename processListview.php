<?php

require_once 'HistoryDAO.php';

// var_dump($_POST);

//store all the items into database
//id, venue, address, lat, lng
$id = $_POST['id'];
$venue = $_POST['venue'];
$address = $_POST['address'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

$historydao = new HistoryDAO();
$historydao->addIternary($id,$venue,$address,$lat,$lng);

echo 'Added into Database';

?>