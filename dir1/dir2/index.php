<meta charset="UTF-8">
<?php
$host = "localhost";
$user = "root";
$pass = "root";
$name = "test";

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8");

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query) or die(mysqli_error($link));


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>