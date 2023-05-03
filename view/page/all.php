<?php 
$path =  $_SERVER['DOCUMENT_ROOT'] . "/connect.php";
$link = require $path;

$query = "SELECT * FROM users";

$result = mysqli_query($link, $query);
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

$content = "";

foreach ($data as $page) {
    $content .= "
    <div>
        <a href='/page/$page[id]'>$page[name] $page[surname]</a>
    </div>
    ";
};

$page = [
    "content" => "<h2>Список всех пользователей</h2>" . $content,
    "title" => "Список всех страниц"
];

return $page;
?>