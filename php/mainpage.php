<?php
session_start();
if($_SESSION['auth'] == true){
echo '<div class = "create-heading"><a class = "create-heading-link" href="/addpost">Разместить статью</a></div>';
$connect = mysqli_connect('localhost','root','','forum');
$query = mysqli_query($connect,'Select * from topics');
echo "<div class='posts'>";
while($topics = mysqli_fetch_assoc($query)){
    $topic_header = $topics['header'];
    $author_login = $topics['author_login'];
    $date = $topics['date'];
    $datearray = explode(' ',$date);
    var_dump($datearray);
    echo "<div class='post'><a class='post-link' href=''><h2>$topic_header</h2><p>Автор: $author_login</p><p>"?><?echo date('d.m.Y H:i', strtotime($date))?><?"</p></a></div>";
}
echo "</div>";
}
else if($_SESSION['auth'] != true){
        header('Location: /login');
    }
?>
