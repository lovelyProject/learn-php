<?php 
$url = 'http://learn-php/file.php?id=2';

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

$res = curl_exec($curl);

echo json_decode($res);
?>