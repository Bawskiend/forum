<?php
session_start();
if($_SESSION['auth'] == true){?>
<div class="form-container">
    <form method="POST" class="newpost-form">
    <p>Заголовок</p>
    <input type="text" name="header" placeholder="В чем заключается тема?">
    <p>Основная часть</p>
    <textarea name="text" cols="40" rows="10" style="resize:vertical;"></textarea>
    <input type="submit" value="Опубликовать" class="submit">
    </form>
</div>
<?}
else if($_SESSION['auth'] != true){
        header('Location: /login');
    }
?>
