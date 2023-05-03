<?php
$path =  $_SERVER['DOCUMENT_ROOT'] . "/connect.php";
$link = require $path;


$url = $_SERVER['REQUEST_URI'];

$route = ("/page/(?<catSlug>[a-zA-Z0-9-_]+)");
preg_match("#$route#", $url, $slug);
// var_dump($slug);
$catSlug = $slug['catSlug'];

$query = 
"SELECT pages.id as pages_id, pages.title, pages.content, pages.slug as pages_slug, category.slug, category.name
FROM pages
INNER JOIN category ON pages.category_id = category.id
WHERE category.slug = '$catSlug'";

$result = mysqli_query($link, $query) or die(mysqli_error($link));
$content = "<ul>";
for ($data = []; $page = mysqli_fetch_assoc($result); $data[] = $page) {
    $content .= "<li><a href='$url/$page[pages_slug]'>$page[pages_slug]</a></li>";
};
$content .= "</ul>";

$page = [
    "title" => "Все страницы",
    "content" => $content
];

return $page;

?>