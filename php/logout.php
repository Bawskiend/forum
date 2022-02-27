<?php
    session_start();
    unset($_SESSION['auth']);
    header('Location: profile.php');
?> 
<meta charset="UTF-8">
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
  <p class="text">FUCK YOU</p>
<form action="" method="POST">
  <input type="text" name="login">
  <input type="password" name="password">
  <input type="submit" value="click">
</form>
</body>
</html>
<script src='js/script.js'></script>