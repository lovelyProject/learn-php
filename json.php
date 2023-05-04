<?php 
$url = 'http://learn-php/test.loc';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$res = curl_exec($curl);

if ($res === false) {
    echo curl_error($curl);
} else {
    var_dump($res);
}
?>