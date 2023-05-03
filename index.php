<?php 
$link = require './connect.php';
$layout = file_get_contents("./layout.php");
$url = $_SERVER['REQUEST_URI'];

// echo $layout;
// echo $url;
preg_match("#/page/([a-zA-Z0-9_-]+)#", $url, $match);
$slug = $match[1];

$query = "SELECT * FROM pages WHERE slug = '$slug'";
$result = mysqli_query($link, $query);
$page = mysqli_fetch_assoc($result);
// var_dump($page);
if (!empty($page)) {
    $layout = preg_replace("{{{ content }}}", $page['content'], $layout);
    $layout = preg_replace("{{{ title }}}", $page['slug'], $layout);

    echo $layout;
}
?>

