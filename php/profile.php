<?php
session_start();
if($_SESSION['auth'] and !empty($_GET)){
  $query = "select * from users where id = '$id'";
  $link = mysqli_connect('localhost','Frazer','hubprs13','phptest');
  $result = mysqli_query($link,$query) or die(mysqli_error($link));
  $user = mysqli_fetch_assoc($result);
  $_SESSION['name'] = $user['name'];
}
?>

    
