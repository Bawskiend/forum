<?php
if(empty($_SESSION['auth'])){
    if(!empty($_POST['login']) and !empty($_POST['password'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
        $connect = mysqli_connect('localhost','root','','forum');
        $query = "select * from users where login = '$login'";
        $result = mysqli_query($connect,$query) or die(mysqli_error($connect));
        $user = mysqli_fetch_assoc($result);
        if(!empty($user)){
            $hash = $user['password'];
            if(password_verify($_POST['password'],$hash)){
                $_SESSION['auth'] = true;
                $_SESSION['author_id'] = $user['id'];
                $_SESSION['author_login'] = $user['login'];
                $_SESSION['id'] = $user['id'];
                header('Location: mainpage');

            }
        }else{
            echo 'неверный логин или пароль';
        }
}
}else{
    header('Location: mainpage');
}
?>
<div class="form-container">
    <form method="POST" class="login-form">
        <p>Логин:</p>
        <input type="text" name='login' class='login'>
        <p>Пароль:</p>
        <input type="password" name='password'>
        <input type="submit" value="Войти" name="submit" class='reg'>
    </form>
    <p><a href="/registration">Регистрация</a></p>
</div>

