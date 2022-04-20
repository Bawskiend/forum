<?php
session_start();
if($_SESSION['auth'] == true and ($_SESSION['user_rights'] == 'moderator' or $_SESSION['user_rights'] == 'admin'))
$topic_id = $_GET['topic_id'];
$connect = mysqli_connect('localhost','root','','forum');
$query = mysqli_query($connect," UPDATE topics SET status = 'deleted' WHERE topic_id = '$topic_id'") or die(mysqli_error($connect));
if($query){
    header('Location: mainpage');
}
?>