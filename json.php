<?php 
$url = 'http://learn-php/file.php';

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_POST, 1);
$data = ["token" => "12345", "birthday" => "2023-06-15"];

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$res = curl_exec($curl);
echo json_decode($res);
?>