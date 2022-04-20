<?php
session_start();
if($_SESSION['auth'] == true and ($_SESSION['user_rights'] == 'moderator' or $_SESSION['user_rights'] == 'admin'))
$comment_id = $_GET['comment_id'];
$connect = mysqli_connect('localhost','root','','forum');
$query = mysqli_query($connect,'update ')
?>