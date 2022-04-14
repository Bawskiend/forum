<?php
session_start();
if($_SESSION['auth'] == true){
    $connect = mysqli_connect('localhost','root','','forum');
    $id = $_GET['id'];
    $query = "select * from topics where id='$id'";
    $result = mysqli_fetch_assoc($query);
    if($result){
        
    }
}
?>