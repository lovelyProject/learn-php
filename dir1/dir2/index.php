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
    <?php if (isset($_SESSION['auth'])) : ?>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, sapiente impedit voluptate, esse delectus obcaecati sed perferendis molestias necessitatibus sunt rerum. Minus laudantium, quidem perferendis perspiciatis, et rerum cum aut quo illo eum nobis architecto vel officia dolorem quasi porro hic harum quis vero sit consectetur. Numquam eum facilis quaerat?</p>
    <?= $_SESSION['login'] ?>
    <?php else : ?>
        <form method="POST" action="index.php">
        <input type="text" name="name" placeholder="name" value="<?= $_POST['name']?>">
        <input type="number" name="age" placeholder="age" value="<?= $_POST['age'] ?>">
        <input type="text" name="salary" placeholder="salary" value="<?= $_POST['salary'] ?>">
        <input type="submit">
    </form>
    <?php endif; ?>
</body>
</html>