<?php
$host = "localhost";
$user = "root";
$password = "root";
$name = "pages";

$link = mysqli_connect($host, $user, $password, $name);
mysqli_query($link, "SET NAMES 'utf8'");

return $link;
?>