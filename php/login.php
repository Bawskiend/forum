<?php
session_start();
if(empty($_SESSION['auth'])){
    if(!empty($_POST['login']) and !empty($_POST['password'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $connect = mysqli_connect('localhost','Frazer','hubprs13','phptest');
        $query = "select * from users where login = '$login' and password = '$password'";
        $result = mysqli_query($connect,$query) or die(mysqli_error($query));
        $user = mysqli_fetch_assoc($result);
        if(!empty($user)){
            $_SESSION['auth'] = true;
            header('Location: mainpage');
        }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p class="text">Форма регистрации</p>
    <form method="POST" class="form">
        <div class="container">
        <p>Логин:</p>
        <input type="text" name='login' class='login'>
        <p>Пароль:</p>
        <input type="password" name='password'>
    <input type="submit" value="reg" name="submit" class='reg'>
    </form>
</body>
</html>
