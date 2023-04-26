<?php 
session_start();

if ($_SESSION['auth']) {
    echo "Доступ разрешен";
    echo $_SESSION['login'];

} else {
    header("Location: login.php");
}
?>
