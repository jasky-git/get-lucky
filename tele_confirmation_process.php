<?php
  session_start();
  
  $title = $_POST['title'];
  //Telegram confirmation
  $tele_name = "Lucky User";
  $token = "";
  $chatid = "";

  $data = [
        'chat_id' => '',
        'text' => 'Hi, '. $tele_name .'. Your Iternary titled: '.$title.' is set.  
        autogenerated from: Get Lucky Application.'
    ];

  $response = file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

  /*
  //Calling from CMD
  curl -X POST "https://api.telegram.org/bot1049848190:AAHwK2pfWCSu38QVX4MzFSjzaNZ6Q7HiLYw/sendMessage" -d "chat_id=-293965325&text=Testing Message from CMD"
  */

  $_SESSION['iternary'] = "added successfully";

  // echo 'Telegram message send';

  // header("Location: home.html");
  
?>