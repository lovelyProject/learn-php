<?php 
$url = 'https://code.mu';
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

$res = curl_exec($curl);

if ($res === false) {
    echo curl_error($curl);
} else {
    echo $res;
}
?>