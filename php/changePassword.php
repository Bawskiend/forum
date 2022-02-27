<?php
session_start();

?>
<meta charset="UTF-8">
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile.php</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="app-container">
<?
if($_SESSION['auth']){
  $id = $_SESSION['id'];
  $link = mysqli_connect('localhost','Frazer','hubprs13','phptest');
  $query = "select * from users where id=$id";
  $result = mysqli_query($link,$query);
  $user = mysqli_fetch_assoc($result);
  echo 'Вы зашли под пользователем: ' . $user['name'] . '<br>';
  $hash = $user['password'];
  $oldpassword = $_POST['old_password'];
  $newpassword = $_POST['new_password'];
  $confirm = $_POST['new_password_confirm'];
  $verify = password_verify($oldpassword,$hash);
if($verify and ($newpassword == $confirm)){
  echo 'успешная смена пароля';
  $newPasswordHash = password_hash($newpassword, PASSWORD_DEFAULT);
  $query = "update users set password='$newPasswordHash' where id='$id'";
  mysqli_query($link,$query);
}elseif(!$verify and !empty($_POST)){
  echo 'неверный старый пароль';
}
?>
<form action="" method="POST">
  <p>Старый пароль</p>
	<input type="password" name="old_password">
  <p>новый пароль</p>
	<input type="password" name="new_password">
  <p>Подтверждение</p>
  <input type="password" name="new_password_confirm">
	<input type="submit" name="submit">
</form>

<?
echo "<a href='logout.php'>Выйти</a>";
}elseif(empty($_SESSION['auth'])){
}
?>
</div>
    
