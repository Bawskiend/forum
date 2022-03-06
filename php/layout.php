<?php
session_start();
if($_SESSION['auth'] == true){
    $logoutlink = '<a href="/logout">Выйти</a>';
    $layout = str_replace('{{ header }}',$logoutlink,$layout);
}
elseif($_SESSION['auth'] == true){
    $layout = str_replace('{{ header }}','Авторизуйтесь',$layout);
}
?>
