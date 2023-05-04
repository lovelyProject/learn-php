<?php 
$url = 'http://learn-php/file.php';
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt($curl, CURLOPT_COOKIE, 'name=john; login=admin');

$result = curl_exec($curl);

if ($result === false) {
    echo curl_error($curl);
} else {
    echo $result;
}
?>