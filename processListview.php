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


$tele_name = "Lucky User";
$token = "";
$chatid = "";
$data = [
      'chat_id' => '',
      'text' => 'Hi, '. $tele_name .'. Your Confirmation id is '.$userId.' from Get Lucky'
  ];

$response = file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

/*
//Calling from CMD
curl -X POST "https://api.telegram.org/bot1049848190:AAHwK2pfWCSu38QVX4MzFSjzaNZ6Q7HiLYw/sendMessage" -d "chat_id=-293965325&text=Testing Message from CMD"
 */
   
alert("Iternatery added Successfully");

?>