<?php
if($_SESSION['auth'] == true){
    echo'<a class="logout-button" href="/logout">Выйти</a>';
}
?>