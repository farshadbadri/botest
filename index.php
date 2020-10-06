<html>
<head>
</head>

<h1> something most be tested in my gihub  </h1>
  <p> sdsdsdsdsdsd</p>
<body>

</body>
</html>


<?php 
$bot_token = "1271578252:AAEQukeL4N8n0NCLAjc-w0MifrIXHb7dBI8";
echo  "https://api.telegram.org/".$bot_token."/getMe";

include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

$Updates = $MadelineProto->channels->inviteToChannel(['channel' => InputChannel, 'users' => [InputUser, InputUser], ]);


?>
