<?php 
    if (!empty($_POST['login']) and !empty($_POST['password'])) {
        

        $host = 'localhost';
        $user = "root";
        $password = "root";
        $name = "test";

        $link = mysqli_connect($host, $user, $password, $name);
        mysqli_query($link, "SET NAMES 'utf8'");

        $login = $_POST['login'];
        $password = $_POST['password'];
        $query = "INSERT INTO logs (login, pass) VALUES ('$login', '$password')";
        mysqli_query($link, $query) or die(mysqli_error($link));
        
        echo "Регистрация прошла успешно";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
<form action="" method="POST">
	<input name="login" type="text">
	<input name="password" type="password">
	<input type="submit">
</form>
</body>
</html>