<?php
$access_token = 'IGQVJXNThzRG1ya0ZATb2dndG94MEdQZAUdnbzRTYU1BRm5yX1BLbEEzeEZAac0d0dU1fbDYwVm16VlVVejNIVVVoNmFGMFB6ZAl84LW81SXJqcXdOX18yaGFZAZAXBsSHZAuVzVxZAWFVUFBEaTZAjbDZA6RzM2aAZDZD';
$url = 'https://graph.instagram.com/me/media?fields=id,caption,permalink,media_url&access_token='.$access_token;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
$log = curl_close($curl);

echo json_decode(json_encode($response), true);