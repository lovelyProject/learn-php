<?php 
$path =  $_SERVER['DOCUMENT_ROOT'] . "/connect.php";
$link = require $path;

$query = "SELECT * FROM category";

$result = mysqli_query($link, $query) or die(mysqli_error($link));
$content = "<ul>";
for ($pages = []; $page = mysqli_fetch_assoc($result); $pages[] = $page) {
    $content .= "<li><a href='page/$page[slug]'>$page[name]</a></li>";
};
$content .= "</ul>";

$page = [
    "content" => $content,
    "title" => "Все категории"
];

return $page;
?>
