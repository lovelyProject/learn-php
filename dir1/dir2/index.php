<meta charset="UTF-8">
<?php
$host = "localhost";
$user = "root";
$pass = "root";
$name = "exerice";

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
$path = "test.php";
$param = "success";
header("Location: $path?$param");
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
   <table>
   <?php foreach($data as $row) : ?>
    <?= "<tr>" ?>
    <?= "<td>$row[name]</td>" ?>
    <?= "<td>$row[age]</td>" ?>
    <?= "<td>$row[salary]</td>" ?>
    <?= "<td><a href='edit.php?id=$row[id]'>редактировать пользователя</a></td>" ?>
    <?= "</tr>" ?>
    <?php endforeach ?>
   </table>
</body>
</html>