<?php
    if($_SESSION['auth'] != true){
        header('Location: /login');
    }
?>
<div class="list-container">
    <ul class="list">
        <li><p class='list-item'><a class='list-link' href='property'>Недвижимость</a></p></li>
        <li><p class='list-item'><a class='list-link' href='cars'>Авто</a></p></li>
        <li><p class='list-item'><a class='list-link' href='job'>Работа</a></p></li>
    </ul></div>