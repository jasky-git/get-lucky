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
    <title>Timeline</title>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/timeline.css">
    
    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/scroller.css">
    <script type="text/javascript" src="javascript/scroller.js"></script>
    
    <?php include "nav.php"; ?>

</head>
<body>
    <!-- Then put toasts within -->
    <!--
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <img src="..." class="rounded mr-2" alt="...">
        <strong class="mr-auto">Bootstrap</strong>
        <small>11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">
        Hello, world! This is a toast message.
      </div>
    </div>
  </div>
  -->

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
                
                echo " ".calculate_Process($lat[$temp], $lng[$temp], $lat[$counter], $lng[$counter]);
                // echo calculate_Process($temp_venue[$temp], $temp_venue[$counter]);
                echo "</small></p>";  
                }
        echo "
            </div>
            <div class='timeline-body'>
              <p>Description:</p>
              <p>{$history->venueId}</p>
            </div>
        </div>
        </li>";
        
      // }
      
    }
    
    echo "</ul></div>";
    ?>

</body>
</html>