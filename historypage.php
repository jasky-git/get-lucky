<?php 
  require 'HistoryDAO.php';
  // include("include/authenticate_session.php");
?>
<html>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <head>
    <style>
      ul.timeline {
        list-style-type: none;
        position: relative;
      }
      ul.timeline:before {
          content: ' ';
          background: #d4d9df;
          display: inline-block;
          position: absolute;
          left: 29px;
          width: 2px;
          height: 100%;
          z-index: 400;
      }
      ul.timeline > li {
          margin: 20px 0;
          padding-left: 20px;
      }
      ul.timeline > li:before {
          content: ' ';
          background: white;
          display: inline-block;
          position: absolute;
          border-radius: 50%;
          border: 3px solid #22c0e8;
          left: 20px;
          width: 20px;
          height: 20px;
          z-index: 400;
      }
    </style>
    <?php include 'nav.php' ?>
  </head>
<body>
  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h4>Latest News</h4>
        <ul class="timeline">
          <?php
            $dao = new HistoryDAO();
            $result = $dao->getAll();

            foreach($result as $history) {
              echo "            
                <li>
                  <a target='_blank' href='https://www.totoprayogo.com/#'>New Web Design</a>
                  <a href='#' class='float-right'>{$history->datee}</a>
                  <p>Venue: {$history->venue}</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                </li>
              ";
            }
          ?>
          
        </ul>
      </div>
    </div>
  </div>

  <div class="text-muted mt-5 mb-5 text-center small"></a></div>

</body>
</html>