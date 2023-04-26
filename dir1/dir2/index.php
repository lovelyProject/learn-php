<?php 
    session_start();

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
    <form method="POST" action="index.php">
        <input type="text" name="name" placeholder="name" value="<?= $_POST['name']?>">
        <input type="number" name="age" placeholder="age" value="<?= $_POST['age'] ?>">
        <input type="text" name="salary" placeholder="salary" value="<?= $_POST['salary'] ?>">
        <input type="submit">
    </form>
</body>
</html>