<?php 
    session_start();

    if (!empty($_POST)) {
        $host = "localhost";
        $user = "root";
        $pass = "root";
        $name = "test";
        var_dump($_POST);
        $link = mysqli_connect($host, $user, $pass, $name);
        mysqli_query($link, "SET NAMES 'utf8'");


        $name = $_POST['name'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];

        $query = "INSERT INTO users (name, age, salary) VALUES ('$name', '$age', '$salary')";
        $result = mysqli_query($link,  $query) or die(mysqli_error($link));

        $_SESSION['flash'] = "success flash message";
        header("Location: index.php");
    } else

    if (isset($_SESSION['flash'])) {
        echo $_SESSION['flash'];
        unset($_SESSION['flash']);
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
    <form method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="age" placeholder="age">
        <input type="text" name="salary" placeholder="salary">
        <input type="submit">
    </form>
</body>
</html>