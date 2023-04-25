<?php 
    $host = 'localhost';
    $user = "root";
    $pass = "root";
    $name = "test";

    $link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf8'");

        $id = $_GET['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];

    $query = "UPDATE users SET name = '$name', age = '$age', salary = '$salary' WHERE id = '$id'";

    mysqli_query($link, $query) or die(mysqli_error($link));

    echo "User changed successfully";

    $homePath = "index.php";

    header("Location: $homePath");
?>