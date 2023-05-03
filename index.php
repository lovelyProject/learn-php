<?php 
$link = require "./connect.php";
$layout = file_get_contents("./layout.php");

$url = $_SERVER['REQUEST_URI'];
// echo $url;

// $route = '/page/(?<catSlug>[a-z0-9_-]+)/(?<pageSlug>[a-z0-9_-]+)';
// if (preg_match("#$route#", $url, $params)) {
//     $page = include 'view/page/show.php';

//     echo "first";
// };

$route = '/page/(?<catSlug>[a-z0-9_-]+)';
if (preg_match("#$route#", $url, $params)) {
    $page = include 'view/page/category.php';

    echo "second";

};

$route = '/';
if (preg_match("#$route#", $url, $params)) {
    $page = include 'view/page/all.php';
    
    $layout = preg_replace("{{{ content }}}", $page['content'], $layout);
    $layout = preg_replace("{{{ title }}}", $page['title'], $layout);

    echo  $layout;
};

?>

