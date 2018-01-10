<?php
$accessToken="EAAZAzqCUkIZCMBAGv5x1QcQq6wg6iOp2JOSSJXclTZBY0BxfZBrUqJpoZAfjmO7EU8infHlfqeuxfMFyf6jJFpvOLqLywDlcg4XZCRr1LNWDk23D6dx2YKpFPzOCEOcPZAZBG0wmebGIEzfPC5ZCyBujjlcZCDkEUKZBuxxAhcZCXnpqVgZDZD"
if(isset($_REQUEST['hub_challenge'])) {
 $challenge = $_REQUEST['hub_challenge'];
 $token = $_REQUEST['hub_verify_token'];
  }
 if($token == "kokcheng123") {
 echo $challenge;
}

$input=json_decode(file_get_contents('php://input'),true);
$userID=$input['entry'][0]['messaging'][0]['sender']['id'];

$message=$input['entry'][0]['messaging'][0]['message']['text'];

echo $userID." and ".$message;

$url="https://graph.facebook.com/v2.6/me/message?access_token=$accessToken";

$jsonData={
  'recipient':{
    'id':$userID
  },
 'message':{
   'text':'hello fucker'!
 }
}";

$ch=curl_init($url);

curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData);
curl_setopt($ch,CURLOPT_HTTPHEADER,['Content-Type: application/json']);

if(!empty($input['entry'][0]['messaging'][0]['message'])){
curl_exec($ch);
}
