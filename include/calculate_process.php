<?php
// error_reporting(0);



$data = "NIL";
$bool_data = FALSE;
// $mode="bicycling";

if(isset($_POST["mode"])) {
  $mode = $_POST["mode"];
} else {
  $mode = "driving";
}

// if (isset($_SESSION["lat1"]) &&  $_SESSION["lat1"]!="" && isset($_SESSION["lng1"]) &&  $_SESSION["lng1"]!="" && isset($_SESSION["lat2"]) &&  $_SESSION["lat2"]!="" && isset($_SESSION["lng2"]) &&  $_SESSION["lng2"]!="") {
function calculate_Process($lat1, $lng1, $lat2, $lng2) {
  // function calculate_Process($origin, $destination) {

    $mode = "driving";
    //Please use your own Google Distance Matrix API KEY if you want to use the functionality
    $myapikey = "";

    $baseUrl = "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&";

    //If use Latitude and Longtitude
    // $lat1 = $_SESSION["lat1"];
    // $lng1 = $_SESSION["lng1"];
    // $lat2 = $_SESSION["lat2"];
    // $lng2 = $_SESSION["lng2"];

    // $url = "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins= ". $lat1 ."," . $lng1 . "&destinations=" . $lat2 . "," . lng ."&key=" . $myapikey;

    // $url = $baseUrl . "origins=" . urlencode($lat1) . "," . urlencode($lng1) . "&destinations=" . urlencode($lat2) . "," . urlencode($lng2) . "&mode=" . urlencode($mode) . "&key=" . $myapikey;

    $url = $baseUrl . "origins=" . urlencode($lat1) . "," . urlencode($lng1) . "&destinations=" . urlencode($lat2) . "," . urlencode($lng2) . "&key=" . $myapikey;

    //If use venue and street name
    /*
      $origin = $_POST["origin"];
      $destination = $_POST["destination"];

      // $url = "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=Washington,DC&destinations=New+York+City,NY&key=" . $myapikey;


      // $url = $baseUrl . "origins=" . urlencode($origin) . "&destinations=" . urlencode($destination) . "&key=" . $myapikey;

    */

      $content = file_get_contents($url);
      $phpObj = json_decode($content);
      $data = getDistance_Duration($phpObj);
      return $data;

    // try {
        // $content = file_get_contents($url);
        // if ($content === FALSE) {
            // $data = "No data retrieved!";
        // } else {
            // $phpObj = json_decode($content);
            // var_dump($phpObj);
            // return $phpObj;
            // // $data = getDistance_Duration($phpObj, $origin, $destination);
            // $bool_data = TRUE;
        // }
    // } catch (Exception $e) {
        // $data = "No data retrieved!";
    // }
    // return $data;
}


function getDistance_Duration($phpObj) {
/*
{
   "destination_addresses" : [ "60A Orchard Rd, Singapore 238890" ],
   "origin_addresses" : [ "69 Killiney Rd, Singapore 239526" ],
   "rows" : [
      {
         "elements" : [
            {
               "distance" : {
                  "text" : "1.4 mi",
                  "value" : 2186
               },
               "duration" : {
                  "text" : "9 mins",
                  "value" : 510
               },
               "status" : "OK"
            }
         ]
      }
   ],
   "status" : "OK"
}
 */

    $rows = $phpObj->rows; // -> an indexed array
    $row = $rows[0];  // -> array element, which is an object

    // access the property of the row object
    $elements = $row->elements; // -> an array

    $dist_duration_info = $elements[0]; // -> an object containing distance, duration, status properties

    $distanceObj = $dist_duration_info->distance; // -> an object containing text and value? properties

    $distance = $distanceObj->text; // -> text property, which is a string, in miles unit

    $durationObj = $dist_duration_info->duration; // -> an object containing text and value? properties

    $duration = $durationObj->text; // -> text property, which is a string, in hours mins

    $result = "Estimated Distance: $distance <br> Duration: $duration";

    return $result;
}
?>