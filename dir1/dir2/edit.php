<?php
    if (!empty($_GET)) {
        $id = $_GET['id'];

        $host = 'localhost';
        $user = "root";
        $pass = "root";
        $name = "exerice";

        $link = mysqli_connect($host, $user, $pass, $name);
        mysqli_query($link, "SET NAMES 'utf8'");

        $query = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));

        $user = mysqli_fetch_assoc($result);
        
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
    <form action="save.php?id=<?= $_GET['id'] ?>" method="POST">
    <input name="name" placeholder="name" value="<?= $user['name'] ?>">
	<input name="age" placeholder="age" value="<?= $user['age'] ?>">
	<input name="salary" placeholder="salary" value="<?= $user['salary'] ?>">
	<input type="submit">
    </form>
</body>
</html>