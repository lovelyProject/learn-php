<?php 
    session_start();

    if (!empty($_POST['login']) and !empty($_POST['password']) and strlen($_POST['login']) > 0 and preg_match("/^[a-zA-Z0-9\-_]+$/", $_POST['login'])) {
        if ($_POST['confirm'] === $_POST['password']) {

        $host = 'localhost';
        $user = "root";
        $password = "root";
        $name = "test";
        
        $link = mysqli_connect($host, $user, $password, $name);
        mysqli_query($link, "SET NAMES 'utf8'");
        
        $login = $_POST['login'];
        $query = "SELECT * FROM logs WHERE login = '$login'";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        
        $user = mysqli_fetch_assoc($result);
        
        if (empty($user)) {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];
            $email = $_POST['email'];
            $date = $_POST['date'];
            $now = date("Y-m-d");
            $query = "INSERT INTO logs (login, pass, email, date, created_at) VALUES ('$login', '$password', '$email', '$date', '$now')";
            mysqli_query($link, $query) or die(mysqli_error($link));
            
            $_SESSION['login'] = $login;
            $_SESSION['auth'] = true;
    
            $id = mysqli_insert_id($link);
            $_SESSION['id'] = $id;
    
            echo $id;
            echo "Регистрация прошла успешно";
        } else {
            echo "Данный логин уже занят";
        }

    } else {
        echo "Пароли не совпадают";
    }

} else {
    echo "Неверный логин либо пароль";
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
	<input name="login" type="text" placeholder="login">
	<input name="password" type="password" placeholder="password">
	<input name="confirm" type="password" placeholder="confirm password">
    <input type="date" placeholder="дата рождения" name="date">
    <input type="email" name="email" placeholder="email">
	<input type="submit">
</form>
</body>
</html>