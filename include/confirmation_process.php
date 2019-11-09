<?php
  include '../include/authenticate_session.php';

  /*
  //EMAIL; FACING UNAUTHORISED CLIENT ISSUES FROM SMU SECURITY
  ini_set('SMTP','smtp.smu.edu');
  ini_set('smtp_port',587);

  $firstname = "Peter";
  $lastname = "Pan";
  $ticketID = 988135;

  $to = "jasky.ong.2017@sis.smu.edu.sg";
  $headers  = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
  $headers  .= "From: NO-REPLY<no-reply@mydomain.com>" . "\r\n";
  $subject = "Get Lucky Confirmation";
  $message = '<html>
                  <body>
                      <p>Hello Big Big World</p>
                      <p>Hi '.$firstname.' '.$lastname.'</p>
                      <p>
                          We recieved below details from you. Please use given Request/Ticket ID for future follow up:
                      </p>
                      <p>
                          Your Request/Ticket ID: <b>'.$ticketID.'</b>
                      </p>
                      <p>
                      Thanks,<br>
                      Get Lucky Team
                      </p>
                  </body>
              </html>';

  */

  $firstname = "Yeow Leong";
  $lastname = "Pan";
  $cfmID = 988135;

  //mail($to,$subject,$message,$headers);

  $token = "";
  $chatid = "";

  $data = [
        'chat_id' => '',
        'text' => 'Hi, '. $firstname .'. Your Confirmation id is '.$cfmID.' from Get Lucky'
    ];

  $response = file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

  /*
  //Calling from CMD
  curl -X POST "https://api.telegram.org/bot1049848190:AAHwK2pfWCSu38QVX4MzFSjzaNZ6Q7HiLYw/sendMessage" -d "chat_id=-293965325&text=Testing Message from CMD"
   */
   
  <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">

  alert("Confirmation Successful");
  header("Location: confirmation.php");
?>
