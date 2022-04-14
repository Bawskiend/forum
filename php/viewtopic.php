<?php
session_start();
if($_SESSION['auth'] == true){
    $connect = mysqli_connect('localhost','root','','forum');
    $id = $_GET['id'];
    $query = "select * from topics where topic_id='$id'";
    $result = mysqli_query($connect,$query) or die(mysqli_error($connect));
    $result = mysqli_fetch_assoc($result);
    $topic_header = $result['header'];
    if($result){
     echo "
     <div class='topic-container'>
        <h2 class='topic_header'>$topic_header<h2>
     </div>";
    }
}
?>