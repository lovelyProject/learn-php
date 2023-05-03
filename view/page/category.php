<?php
$path =  $_SERVER['DOCUMENT_ROOT'] . "/connect.php";
$link = require $path;


$url = $_SERVER['REQUEST_URI'];

$route = ("/pages/(?<catSlug>[a-zA-Z0-9-_]+)");
preg_match($url, $route, $slug);
$query = 
"SELECT pages.id as pages_id, pages.title as pages_title, pages.content as pages_content, pages.slug as pages_slug, category.slug as categories_slug, category.name as categories_name
FROM pages
LEFT JOIN category ON pages.category_id = category.id
WHERE category.slug = $slug[catSlug]";

