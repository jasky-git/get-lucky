<?php

require_once 'HistoryDAO.php';

var_dump($_POST);

//store all the items into database
//id, venue, address, lat, lng
$venueId = $_POST['venueId'];
$venue = $_POST['venue'];
$address = $_POST['address'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$title = $_POST['title'];
$date = $_POST['date'];
$userId = $_SESSION['user'];
// $userId = "1";

$historydao = new HistoryDAO();
$historydao->addIternary($venueId,$venue,$address,$lat,$lng,$title,$date,$userId);

echo 'Added into Database';

?>