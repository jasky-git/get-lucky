<?php
session_start();
require_once 'HistoryDAO.php';

// var_dump($_POST);

//store all the items into database
//id, venue, address, lat, lng
$venueId = $_POST['venueId'];
$venue = $_POST['venue'];
$address = $_POST['address'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$title = $_POST['title'];
$date = $_POST['date'];
$userid = $_SESSION['userid'];

$_SESSION['title'] = $_POST['title'];

$historydao = new HistoryDAO();
$historydao->addIternary($venueId,$venue,$address,$lat,$lng,$title,$date,$userid);

echo 'Added into Database';

?>