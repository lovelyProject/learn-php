<?php 
session_start();
if (!$_SESSION['auth']) {
    header("Location: register.php");
}
$user = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h2>Welcome to profile <?= $_SESSION['login']?></h2>
    <form action="" method="POST">
        <input type="text" name="login" value="<?= $_SESSION['login']?>">
        <button type="submit">Изменить</button>
    </form>
</body>
</html>