<?php
  error_reporting(0);
  // include 'include/authenticate_session.php';
  include 'HistoryDAO.php';
  include 'include/calculate_process.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation</title>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/timeline.css">

    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/scroller.css">
    <script type="text/javascript" src="javascript/scroller.js"></script>
    
    <h5>
      <?php include "nav.php"; ?>
    </h5>
    <h1 class="mt-5" style="text-align:center;"> Confirmation </h1>

</head>
<body>
    <div>
      <button type="button" class="btn btn-success" onclick="acceptTimeline()">Yes</button>
      <button type="button" class="btn btn-warning" onclick="rejectTimeline()">No</button>
      
      <?php
        function acceptTimeline() {
          header("Location: historypage.php");
        }
        
        function rejectTimeline() {
          $dao = new HistoryDAO();
          $reject = $dao->rejectTimeline($title);
        }
      ?>
    </div>
    <?php
    $dao = new HistoryDAO();
    $result = $dao->getTimeLine();

    // var_dump($result);

    echo '<div class="page-header" style="padding-left: 50px; padding-right:50px">
            <h1 id="timeline">Timeline</h1>
            </div>
            <div style="padding-left: 50px; padding-right:50px">
            <ul class="timeline">';

    $count = 0;
    $counter = -1;
    $temp = -1;
    // foreach($result as $k => $v) {


    $lat = array();
    $lng = array();
    $total_venue = array();

    foreach($result as $history) {
      $total_venue[] = $history->venue;
    }

    foreach($result as $history) {
      $count ++;
      $counter ++;
      $temp = $counter-1;

      $lat[] = $history->lat;
      $lng[] = $history->lng;
      $temp_venue[] = $history->venue;

      // var_dump($history->venueId);
      // var_dump($lat);
      // var_dump($lng);

      if($count%2 > 0) {
          echo '<li>';
      } else {
          echo '<li class="timeline-inverted">';
      }
      echo "
        <div class='timeline-badge'><i class='glyphicon glyphicon-check'></i></div>
        <div class='timeline-panel'>
            <div class='timeline-heading'>
              <div class='d-flex'>
                <div class='p2'>
                  <h4 class='timeline-title p-2'>{$history->venue}</h4>
                </div>
                ";
                if($history->address != 'NIL' && $history->address != NULL) {
                 echo "<div class='ml-auto p-2'>{$history->address}</div>";
                }
                echo "
              </div>";
              if($counter > 0 && count($total_venue)>= $counter) {
                echo "<p><small class='text-muted'><i class='glyphicon glyphicon-time'></i>";

                // var_dump($temp);
                // var_dump($counter);
                // var_dump($lat[$temp]);
                // var_dump($lng[$temp]);
                // var_dump($lat[$counter]);
                // var_dump($lat[$counter]);
                // var_dump(calculate_Process($lat[$temp], $lng[$temp], $lat[$counter], $lng[$counter]));

                // https://api.foursquare.com/v2/venues/VENUE_ID=5083df13e4b0a0ddb3ae6051?client_id=UEYIIOJSEV0ZA4UQHMHRB2NOLAAHFFI5OMG5IBJVCMV21SGG&client_secret=22I2YDXRFJVAIOZZSY2XVKO2BGAGSOCK5UGY422AVFMPHSE3&v=20191030

                // https://api.foursquare.com/v2/venues/search?ll=40.7,-74&client_id=CLIENT_ID&client_secret=CLIENT_SECRET&v=YYYYMMDD

                echo " ".calculate_Process($lat[$temp], $lng[$temp], $lat[$counter], $lng[$counter]);
                // echo calculate_Process($temp_venue[$temp], $temp_venue[$counter]);
                echo "</small></p>";
                }
        echo "
            </div>
            <div class='timeline-body'>
              <p>";

              $url = "https://api.foursquare.com/v2/venues/{$history->venueId}?client_id=UEYIIOJSEV0ZA4UQHMHRB2NOLAAHFFI5OMG5IBJVCMV21SGG&client_secret=22I2YDXRFJVAIOZZSY2XVKO2BGAGSOCK5UGY422AVFMPHSE3&v=20191030";
              
              $content = file_get_contents($url);
              $phpObj = json_decode($content);
              
              $response = $phpObj->response; 
              $venue = $response->venue;
              $contact = $venue->contact;
              
              if($contact->formattedPhone != null || $contact->twitter != null || $contact->facebookName != null) {
                echo "<h6>Description:</h6><br>";
              }
              
              if($contact->formattedPhone != null) {
                echo "Contact: ".$contact->formattedPhone."<br>";
              }
              if($contact->twitter != null) {
                echo "Twitter: ".$contact->twitter."<br>";
              }
              if($contact->facebookName != null) {
                echo "Facebook: ".$contact->facebookName."<br>";
              }

              echo "</p>
            </div>
        </div>
        </li>";

      // }

    }

    echo "</ul></div>";
    ?>

</body>
</html>