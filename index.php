<?php 
$link = require "./connect.php";
$layout = file_get_contents("./layout.php");

$url = $_SERVER['REQUEST_URI'];
// echo $url;

  if (preg_match("#/page/all#", $url, $params)) {
    $page = include "view/page/all.php";
    
    $layout = str_replace("{{ content }}", $page['content'], $layout);
    $layout = str_replace("{{ title }}", $page['title'], $layout);
    echo $layout;
} else if (preg_match("#/page/([a-zA-Z0-9-_]+)#", $url, $params)) {
    $page = include "view/page/show.php";

    $layout = str_replace("{{ content }}", $page['content'], $layout);
    $layout = str_replace("{{ title }}", $page['title'], $layout);

    echo $layout;
}
?>

