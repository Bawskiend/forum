<?php
if($_SESSION['auth'] == true){
    echo'<a class="logout-button" href="/logout">Выйти</a>';
}
elseif($_SESSION['auth'] != true and $url == '/login' ){
    echo 'Авторизация';
}
elseif($url== '/registration'){
   echo ''; 
}else{
    echo '';
}
?>