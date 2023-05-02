<?php 
$link = require './connect.php';
$url = $_SERVER['REQUEST_URI'];
// echo $url . "<br />";
preg_match('#/page(\d+)#', $url, $match);

$id = $match[1];
// echo $id;
$query = "SELECT * FROM pages WHERE id = '$id'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$page = mysqli_fetch_assoc($result);
$layout = file_get_contents('layout.php');

$layout = str_replace("{{ title }}", $page['title'], $layout);
$layout = str_replace("{{ content }}", $page['content'], $layout);

echo $layout;
?>
