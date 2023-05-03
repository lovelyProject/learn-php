<?php
$path =  $_SERVER['DOCUMENT_ROOT'] . "/connect.php";
$link = require $path;

$url = $_SERVER['REQUEST_URI'];

$route = "/page/(?<catSlug>[a-zA-Z0-9-_]+)/(?<pageSlug>[a-zA-Z0-9-_]+)";

preg_match("#$route#", $url, $params);

$slug = $params['pageSlug'];

$query = "SELECT * FROM pages WHERE slug = '$slug'";

$result = mysqli_query($link, $query) or die($link);
$page = mysqli_fetch_assoc($result);

return [
    "content" => $page['content'],
    "title" => $page['title'],
]
?>