<?php
session_start();
if($_SESSION['auth'] == true){
echo '<div class = "create-heading"><a class = "create-heading-link" href="/addpost">Разместить статью</a></div>';
    $connect = mysqli_connect('localhost','root','','forum');
    $id = $_GET['id'];
    $query = "select * from topics where topic_id='$id'";
    $result = mysqli_query($connect,$query) or die(mysqli_error($connect));
    $result = mysqli_fetch_assoc($result);
    $topic_header = $result['header'];
    $topic_text = $result['text'];
    $topic_author = $result['topic_author'];
    if($result){
     echo "
     <div class='topic-content'>
        <h1 class='topic-content__header'>$topic_header<h1>
        <p class='topic-content__text'>$topic_text</p>
        <p class=topic-content__author>$topic_author</p>
     </div>";
    }
}
?>