<meta charset="UTF-8">
<?php
$host = "localhost";
$user = "root";
$pass = "root";
$name = "exerice";

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, 'SET NAMES "utf8"');

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
?>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
    </tr>
<?php foreach($data as $row) : ?>
    <tr>
        <?= "<td>$row[id]</td>" ?>
        <?= "<td>$row[name]</td>" ?>
        <?= "<td>$row[age]</td>" ?>
        <?= "<td>$row[salary]</td>" ?>
    <?= "<td><a href=?id=" . $row['id'] . ">удалить</a></td>" ?>
<?php endforeach ?>
</table>
 <?php 
    if (isset($_GET)) {
        $del = $_GET['id'];
        $link = mysqli_connect($host, $user, $pass, $name);
        mysqli_query($link, 'SET NAMES "utf8"');
        
        $query = "DELETE FROM users WHERE id = $del";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
    }

 ?> 


