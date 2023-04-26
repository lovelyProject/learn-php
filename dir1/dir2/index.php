<?php 
    session_start();


    if (isset($_SESSION['flash'])) {
        echo $_SESSION['flash'];
        unset($_SESSION['flash']);
    }

    if (!empty($_POST)) {
        $formName = $_POST['name'];
        $formAge = $_POST['age'];
        $formSalary = $_POST['salary'];

        if (is_int($formAge) && is_int($formSalary) && is_string($formName)) {
            $host = "localhost";
            $user = "root";
            $pass = "root";
            $name = "test";

            $link = mysqli_connect($host, $user, $pass, $name);
            mysqli_query($link, "SET NAMES 'utf8'");

            $query = "INSERT INTO users (name, age, salary) VALUES ('$formName', '$formAge', '$formSalary')";
            $result = mysqli_query($link, $query);

            $_SESSION['flash'] = "форма прошла валидацию и успешно сохранена";
            header("Location: index.php");
        } else {
            $_SESSION['flash'] =  "форма не прошла валидацию";
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
    <form method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="number" name="age" placeholder="age">
        <input type="number" name="salary" placeholder="salary">
        <input type="submit">
    </form>
</body>
</html>