 
<?php

$update = file_get_contents('php://input');
$update = json_decode($update , TRUE);

$chatID= $update['message']['from']['id'];
function sendMessage($chatid,$text){
  $url="https://api.telegram.org/bot1271578252:AAEQukeL4N8n0NCLAjc-w0MifrIXHb7dBI8/sendMessage?chat_id='.$cahtid."$text=".$text;
  file_get_contents($url);
}
if($message=='/start'){

sendMessage($chatID, 'hi');

}



//   1249095069

//   $me = yield $madelineProto->getSelf();
//   $chanelId = 123456789; //channel target

//   $inputContacts = [
//   ['_' => 'inputPhoneContact', 'client_id' => $me['id'], 'phone' => '1111111111', 'first_name' => 'foo', 'second_name' => 'bar'],
//   ['_' => 'inputPhoneContact', 'client_id' => $me['id'], 'phone' => '2222222222', 'first_name' => 'foo', 'second_name' => 'bar'],
//   ];

//   $contacts = yield $madelineProto->contacts->importContacts(['contacts' => $inputContacts]);

//     $channel = 'channel#'.$channelId;
//    foreach ($contacts['users'] as $contact) {
//       $keyUser = 'user#'.$contact['id'];
//      $updates = yield $madelineProto->channels->inviteToChannel(['channel' => $channel, 'users' => [$keyUser],]);
//          }









// "https://api.telegram.org/".$bot_token."/getMe";
// 1271578252:AAEQukeL4N8n0NCLAjc-w0MifrIXHb7dBI8
//set webhook -> https://api.telegram.org/bot1271578252:AAEQukeL4N8n0NCLAjc-w0MifrIXHb7dBI8/setwebhook?url=https://github.com/farshadbadri/botest/index.php
// echo $channelName ="@netasu_tech";
// echo $userName="@pishoniavdermanager";
// include 'madeline.php';
// $MadelineProto = new \danog\MadelineProto\API('session.madeline');
// $MadelineProto->start();
// $Updates = $MadelineProto->channels->inviteToChannel(['channel' => InputChannel, 'users' => [InputUser, InputUser], ]);
// $Updates=$MadelineProto->channels->inviteToChannel(['channel' => $channelName, 'users' => [$userName] ]);
?>
