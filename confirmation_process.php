<?php
$token = "";
$chatid = "";

//Caller
sendMessage($chatid, "Hello Big Big World", $token);

// $result = Request::sendMessage([
    // 'chat_id' => $chat_id,
    // 'text'   => 'HELLO Big Big World',
// ]);

function sendMessage($chatID, $messaggio, $token) {
    echo "sending message to " . $chatID . "\n";
    
    /*       
     // https://api.telegram.org/bot<Bot_Token>/getUpdates?offset=0
    */
    
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
    
    //bot.sendMessage('@something', 'Hello')
    // $username = ""
    // $url = "https://api.telegram.org/bot" . $token . "/sendMessage?" . $result;
   
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
?>
