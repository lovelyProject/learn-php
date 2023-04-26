<?php 
    session_start();
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
<?php 
function makeFoundation() {
    echo "<form action='' method='POST'>";
    echo "<input type='text' name='login'>";
    echo "<input type='password' name='pass'>";
    echo "<input type='submit'>";
    echo "</form>";
}
    if (!empty($_POST)) {
        $login = $_POST['login'];
        $password = $_POST['pass'];

        $host = "localhost";
        $user = "root";
        $pass = "root";
        $name = "test";

        $link = mysqli_connect($host, $user, $pass, $name);
        mysqli_query($link, "SET NAMES 'utf8'");

        $query = "SELECT * FROM logs WHERE login = '$login' AND pass = '$password'";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));

        $user = mysqli_fetch_assoc($result);
        
        $flag = !empty($user);

        if ($flag) {
            echo "Успешная авторизация";
            $_SESSION['auth'] = true;
            header("Location: index.php");
        } else {
            makeFoundation();
            echo "Неверный логин или пароль";
        }
    } else {
        makeFoundation();
    }

?>
</body>
</html>