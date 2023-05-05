<?php 
$url = 'http://learn-php/file.php';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POST, 1);

$arr = [1,2,3,4,5];
$json = json_encode($arr);
$data = ['json' => $json];

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$answer = curl_exec($curl);

var_dump($answer);
?>