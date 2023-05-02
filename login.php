<?php 
if (!empty($_POST)) {
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $name = 'exerice';

    $link = mysqli_connect($host, $user, $password, $name);
    mysqli_query($link, "SET NAMES 'utf8");
    
    $login = $_POST['login'];
    
    $query = "SELECT * FROM logs WHERE login = '$login'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $user = mysqli_fetch_assoc($result);

    if (!empty($user)) {
        
    }
}

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
    <form action="" method="">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
        <button type="submit">Войти</button>
    </form>
</body>
</html>