<?php

$api_key      = 'bk5KjZ3XHyvVmdaeFS29ANWrgUEhx6nCslo8qY04J7BMpRuiIGtcPD1QzwLO'; // Api Key
$game         = 'Mobile Legends';  // Nama / Kode Games
$user_id      = '-'; // User ID Games
$server       = '-'; // Server / zone Games

$data = [
    'api_key' => $api_key,
    'game'    => $game,
    'user_id' => $user_id,
    'server'  => $server
];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.dipsystore.com/api/v1/check-game");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);     

$response = curl_exec($ch);

curl_close($ch);
echo $response;
