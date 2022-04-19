<?php
session_start();
if($_SESSION['auth'] == true and empty($_POST['topic-header']) and empty($_POST['topic-text'])){?>
<div class="form-container">
    <form method="POST" class="newpost-form">
    <p>Заголовок</p>
    <input type="text" name="topic-header" placeholder="В чем заключается тема?">
    <p>Основная часть</p>
    <textarea name="topic-text" cols="40" rows="10" style="resize:vertical;"></textarea>
    <input type="submit" value="Опубликовать" class="submit">
    </form>
</div>
<?}
else if(!empty($_POST['topic-header']) and !empty($_POST['topic-text'])){
    $topicheader = $_POST['topic-header'];
    $topictext = $_POST['topic-text'];
    $user_id = $_SESSION['user_id'];
    $user_login = $_SESSION['author_login'];
    $connect = mysqli_connect('localhost','root','','forum');
    $query = "INSERT INTO topics SET header='$topicheader', text='$topictext', author_id='$user_id', author_login='$user_login'";
    $mysqliquery = mysqli_query($connect,$query) or die(mysqli_error($connect));
    if($mysqliquery){
        header('Location: /mainpage');
    }
}
else if($_SESSION['auth'] != true){
        header('Location: /login');
    }
?>