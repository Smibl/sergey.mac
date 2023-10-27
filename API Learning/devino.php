<?php

$from = 'FriendsClub';
$to = '';
$text = '';

$postData = [
    'messages' => [
        [
        'from' => 'FriendsClub',
        'to' => '79114867178',
        'text' => 'Testing message'
        ]
    ]
];

$authorizationKey = '45e7b0d9-8d65-4dfc-8a71-5c00b24dc873';

$headers = [
    'Authorization: Key ' . $authorizationKey,
    'Content-Type: application/json'
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,'https://api.devino.online/sms/messages');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close($ch);

var_dump($server_output);

?>
