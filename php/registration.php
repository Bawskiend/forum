<?php
    if(!empty($_POST['login'] and !empty($_POST['password']))){
    $login = $_POST['login'];
    $firstconfirm = $_POST['password'];
    $secondconfirm = $_POST['confirm'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    if($firstconfirm == $secondconfirm ){
    $link = mysqli_connect('localhost','root','','phptest');
    $query = "SELECT * FROM users WHERE login='$login'";
    $user = mysqli_fetch_assoc(mysqli_query($link, $query));
    if(empty($user)){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $age = $_POST['age'];
        $query = "INSERT INTO users SET login='$login', password='$password', name='$name',surname = '$surname',age='$age'";
        $result = mysqli_query($link,$query) or die(mysqli_error($link));
    if($result){
        session_start();
        $id = mysqli_insert_id($link);
        $_SESSION['auth'] = true;
        $_SESSION['id'] = $id;
        header('Location: /mainpage');
    }
}
}else{
    echo 'несовпадение паролей';
}
}
?>
