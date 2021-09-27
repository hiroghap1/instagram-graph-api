<?php
include_once ('api-setting.php');

$version = 'v12.0';
$url = 'https://graph.facebook.com/'.$version.'/'.$instagramBusinessAccount.'?fields=name%2Cmedia.limit(9)%7Bcaption%2Cmedia_url%2Cthumbnail_url%2Cpermalink%2Ctimestamp%7D&access_token='.$access_token;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
$log = curl_close($curl);

echo json_decode(json_encode($response), true);