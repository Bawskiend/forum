<?php
session_start();
if($_SESSION['auth'] == true){
    
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
    <p>для авторизованных пользователей</p>
    <?
    echo $_SESSION['login'];
    ?>
    <ul>
        <li>раз</li>
        <li>два</li>
        <li>три</li>
    </ul>
    <a href="logout">Выйти</a>
</div>

</body>
</html>

<script src='js/script.js'></script>
    <?}else{
        ?>
        <meta charset="UTF-8">
        <div>
        <p>для неавторизованных пользователей</p>
        <a href="../index.php">авторизуйтесь</a>
        </div>
        <?
    }
?>
