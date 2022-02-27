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
if($_SESSION['auth'] and !empty($_GET)){
  $query = "select * from users where id = '$id'";
  $link = mysqli_connect('localhost','Frazer','hubprs13','phptest');
  $result = mysqli_query($link,$query) or die(mysqli_error($link));
  $user = mysqli_fetch_assoc($result);
  $_SESSION['name'] = $user['name'];
}
?>
<a href="changePassword.php">сменить пароль</a><br>
<a href="logout.php">выйти</a><br>
<a style="color='red'" href="delete.php">удалить аккаунт</a>
</div>
    
