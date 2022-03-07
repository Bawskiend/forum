<?php
session_start();
if($_SESSION['auth'] == true){
    $logoutlink = '<a class="logout-button" href="/logout">Выйти</a>';
    $layout = str_replace('{{ header }}',$logoutlink,$layout);
}
elseif($_SESSION['auth'] != true and $url == '/login' ){
    $layout = str_replace('{{ header }}','Авторизация',$layout);
}
elseif($url== '/registration'){
    $layout = str_replace('{{ header }}','',$layout);

}else{
    $layout = str_replace('{{ header }}',' ',$layout);

}
?>