 <?php
  

function send_LINE($msg){
 $access_token = 'w+iop5F5auRiuryF6RIPtUaR3NAYjNo6sIWmpa3sZ0dYH2zjZ79Zckbd1TE0dHRA1n/uAijJ0aRfrGRC9FHhya2CR/2DNcItFgt1UO4sQV5r2/AG7CJuusW0TPlnkBwsirQsQHpAn6U9cJ1Y5SjK9AdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '@635iaurx',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
