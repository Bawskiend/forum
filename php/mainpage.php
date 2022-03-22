<?php
session_start();
if($_SESSION['auth'] == true){
echo '<div class = "create-heading"><a class = "create-heading-link" href="">Разместить статью</a></div>';
$connect = mysqli_connect('localhost','root','','forum');
$query = mysqli_query($connect,'Select * from topics');
while($topics = mysqli_fetch_assoc($query)){
    $topic_header = $topics['header'];
    $topic_text = $topics['text'];
    echo "<div class='thread'><a href=''><p>$topic_header</p><p>$topic_text</p></a></div>";
}
}
else if($_SESSION['auth'] != true){
        header('Location: /login');
    }
?>
