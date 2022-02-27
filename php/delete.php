<?php
    session_start();
    
    $id = $_SESSION['id'];
    $link = mysqli_connect('localhost','Frazer','hubprs13','phptest');
    $query = "select * from users where id='$id'";
    $result = mysqli_query($link,$query);
    $user = mysqli_fetch_assoc($result);
    $hash = $user['password'];
    if(password_verify($_POST['password'],$hash)){
      $query = "delete from users where id='$id'";
      mysqli_query($link,$query);
    }else{
      echo 'неверный пароль';
    }
?> 
<meta charset="UTF-8">
<form action="" method='POST'>
  <input type="password" name="password">
  <input type="submit" name="submit">
</form>
