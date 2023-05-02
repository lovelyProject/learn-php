<?php
session_start();

// function isNotEqual($a, $b) {
//     return $a !== $b ? false : true;
// }
// function checkLogin($login, $link) {
//     $query = "SELECT * FROM logs WHERE login='$login'";
//     $result = mysqli_query($link, $query);
    
//     $user = mysqli_fetch_assoc($result);
    
//     return isset($user) ? false : true;
// }

if (!empty($_POST)) {
      
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    // if (isNotEqual($password, $confirm)) {
    //     $isError = true;
    //     $passError = "Пароли не совпадают";
    //     echo $passError;
    // }
    
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $name = "exerice";

    
    $link = mysqli_connect($host, $user, $pass, $name); 
    mysqli_query($link, "SET NAMES 'utf8'"); 
   
    // if (!checkLogin($login, $link)) {
    //     $isError = true;
    //     $loginError = "Такой логин уже существует";
    // }
   

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO logs (login, password) VALUES ('$login', '$hashed_password')";

        
        $_SESSION['auth'] = true;
        $_SESSION['login'] = $login;        


        header("Location: index.php");
}


?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>registration</title>
</head>
<body>
    <div class="container">
        <div class="registration__container">
            <div class="registration__info">
                <h3 class="registration__title">abc.com</h3>
                <p class="registration__description">abc.com is the best place to find remote talent. We’ve been super impress by the quality of applicants.</p>
                <div class="registration__footer">
                    <p class="registration__footer_20">Madhushan sasanka</p>
                    <p class="registration__footer_16">CEO, abc.com</p>
                </div>
            </div>
            <div class="registration__form-container">
                        <h3 class="registration__form-title">Create an account</h3>
                        <span class="registration__form-text">Let’s get started with your 30 days free trial</span>
                        <form action="registration.php" method="POST" class="registration__form">
                            <ul>
                                <li class="registration__list-item">
                                    <input class="registration__form-item" type="text" value="<?= $_POST['login'] ?>" name="login" placeholder="login" required>
                                </li>
                                    <li class="registration__list-item">
                                    <input class="registration__form-item" type="email" value="<?= $_POST['email'] ?>" name="email" placeholder="email" required>
                                </li>
                                <li class="registration__list-item">
                                    <input placeholder="password" name="password" class="registration__form-item" type="password" value="<?= $_POST['password'] ?>" required>
                                </li>
                                <li class="registration__list-item">
                                    <input placeholder="confirm password" name="confirm" class="registration__form-item" type="password" value="<?= $_POST['confirm'] ?>" required>
                                </li>

                            </ul>
                            <button type="submit" class="btn btn_black mt-70">Create account</button>
                        </form>
                        <button class="btn btn_white mt-20"><img class="icon" src='./svg/google.svg'/>Sign up with Google</button>
                        <div class="sign-in-container">
                            <span class="black-text">Already have an account?</span><a class="blue-text" href="login.php">Sign in</a>
                        </div>
            </div>
        </div>
    </div>
</body>
</html>