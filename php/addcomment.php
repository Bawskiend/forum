<?php
session_start();
if($_SESSION['auth'] == true){
    $commenttext = $_POST['commenttext'];
    $author_id = $_SESSION['user_id'];
    $topic_id = $_SESSION['topic_id'];
    $connect = mysqli_connect('localhost','root','','forum');
    $query = "INSERT INTO comments SET author_id = '$author_id', text = '$commenttext', topic_id = '$topic_id'";
    $result = mysqli_query($connect,$query) or die(mysqli_error($connect));
    if($result){
        header("Location: /viewtopic?id= $topic_id ");
    }else{
        echo 'error';
    }
}
?>