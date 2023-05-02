<?php 
$url = $_SERVER['REQUEST_URI'];
$titles  = require "titles.php";
if ($url === "/page2") {
    $url = "/dir/page2";
} else if ($url === "/page3") {
    $url = "/dir/sub/page3";
}
$title = $titles[$url];


$layout = file_get_contents("layout.php");
$path = "view" . $url . ".php";

if(file_exists($path)) {
    $content = file_get_contents($path);
    $layout = str_replace("{{ content }}", $content, $layout);
    $layout = str_replace("{{ title }}", $title, $layout);

    echo $layout;
} else { 
    header('HTTP/1.0 404 Not Found');
    $content = file_get_contents("view/404.php");
}   
echo $content;
?>
