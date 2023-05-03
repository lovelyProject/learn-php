<?php 
$link = require "./connect.php";
$layout = file_get_contents("./layout.php");

$url = $_SERVER['REQUEST_URI'];

$route = '/page/(?<catSlug>[a-z0-9_-]+)';

if (preg_match("#/page/(?<catSlug>[a-z0-9_-]+)/(?<pageSlug>[a-z0-9_-]+)#", $url, $params)) {
    $page = include 'view/page/show.php';

    $layout = preg_replace("{{{ content }}}", $page['content'], $layout);
    $layout = preg_replace("{{{ title }}}", $page['title'], $layout);

    echo  $layout;
} else if (preg_match("#$route#", $url, $params)) {
    $page = include 'view/page/category.php';

    $layout = preg_replace("{{{ content }}}", $page['content'], $layout);
    $layout = preg_replace("{{{ title }}}", $page['title'], $layout);

    echo  $layout;
} else if (preg_match("#/#", $url, $params)) {
    $page = include 'view/page/all.php';
    
    $layout = preg_replace("{{{ content }}}", $page['content'], $layout);
    $layout = preg_replace("{{{ title }}}", $page['title'], $layout);

    echo  $layout;
}  

?>

