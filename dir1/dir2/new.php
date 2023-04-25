<?php 
        if (!empty($_POST)) {



            $host = "localhost";
            $user = "root";
            $pass = "root";
            $name = "exerice";
            $link = mysqli_connect($host, $user, $pass, $name);
            // mysqli_query($link, "SET NAMES 'utf8");

            $name = $_POST['name'];
            $age = $_POST['age'];
            $salary = $_POST['salary'];

            $query = "INSERT INTO users SET name = '$name', age = '$age', salary = '$salary'";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="name" value="<?php  echo isset($_POST['name']) ? $_POST['name'] : '' ?> ">
        <input type="text" name="age" placeholder="age" value="<?php  echo isset($_POST['age']) ? $_POST['age'] : '' ?> ">
        <input type="text" name="salary" placeholder="salary" value="<?php  echo isset($_POST['salary']) ? $_POST['salary'] : '' ?> ">
        <input type="submit">
    </form>

</body>
</html>