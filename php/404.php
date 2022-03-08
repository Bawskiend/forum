<?php
    $back = $_SERVER['HTTP_REFERER'];
    echo "<p>Whoops, looks like the page you're looking for doesn't exist</p>
    <div class='error-image'></div>";
    echo "<a href='$back'>Вернуться назад</a>";
?>