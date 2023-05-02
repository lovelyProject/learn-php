<?php 
$url = $_SERVER['REQUEST_URI'];
echo $url;

if ($url === "/page2") {
    $url = "/dir/page2";
} else if ($url === "/page3") {
    $url = "/dir/sub/page3";
}
$layout = file_get_contents("layout.php");
$content = file_get_contents("view/" . $url . ".php");

$layout = str_replace("{{ content }}", $content, $layout);

echo $layout;
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