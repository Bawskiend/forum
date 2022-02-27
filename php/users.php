<?php
session_start();
if($_SESSION['auth']){
  $link = mysqli_connect('localhost','Frazer','hubprs13','phptest');
  $query = "Select * from users";
  $result = mysqli_query($link,$query) or die(mysqli_error($link));
  for($data = []; $row = mysqli_fetch_assoc($result);$data[] = $row){
      echo "<a href='profile.php?id=" . $row['id'] . "'>Профиль</a>" . '<br>';
  }
}
?>
<meta charset="UTF-8">
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>code.php</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="app-container">
  <?
if(empty($_SESSION['auth'])){
  echo "<a href='index.php'>Авторизуйтесь</a>";
}
?>
</div>
    
