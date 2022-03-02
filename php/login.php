<?php
if(empty($_SESSION['auth'])){
    if(!empty($_POST['login']) and !empty($_POST['password'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
        $connect = mysqli_connect('localhost','Frazer','hubprs13','phptest');
        $query = "select * from users where login = '$login' and password = '$password'";
        $result = mysqli_query($connect,$query) or die(mysqli_error($query));
        $user = mysqli_fetch_assoc($result);
        if(!empty($user)){
            $_SESSION['auth'] = true;
            header('Location: mainpage');
        }else{
        }
}
}else{
    header('Location: mainpage');
}
?>
