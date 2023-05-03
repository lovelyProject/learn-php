<?php 
$path =  $_SERVER['DOCUMENT_ROOT'] . "/connect.php";
$link = require $path;

$url = $_SERVER['REQUEST_URI'];
preg_match("#/page/([\d]+)#", $url, $match);

$id = $match[1];
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$user = mysqli_fetch_assoc($result);

$content = "
<div>
        Имя $user[name]
</div>
<div>
        Фамилия $user[surname]
</div>
<div>
        Зарплата $user[salary]
</div>
<div>
    <a href='/page/all'>Назад к списку</a>
</div>";

$page = [
    "content" => $content,
    "title" => "$user[name] $user[surname]" 
];

return $page;
?>