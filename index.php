<html>
<head>
</head>

<h1> something most be tested in my gihub  </h1>
<p> sdsdsdsdsdsd</p></br>
<p> new edition
</p>
<body>

</body>
</html>


<?php
// "https://api.telegram.org/".$bot_token."/getMe";


echo $channelName ="@netasu_tech";
echo $userName="@pishoniavdermanager";

include 'madeline.php';
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
// $Updates = $MadelineProto->channels->inviteToChannel(['channel' => InputChannel, 'users' => [InputUser, InputUser], ]);
$Updates=$MadelineProto->channels->inviteToChannel(['channel' => $channelName, 'users' => [$userName] ]);



?>
