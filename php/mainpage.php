<?php
    session_start();
    if($_SESSION['auth'] == true){
        $connect = mysqli_connect('localhost','root','','phptest');
        $query = "Select * from heading";
        file_put_contents('./html/mainpage.html','');
        $dbquery = mysqli_query($connect,$query) or die(mysqli_error($connect));
        for($data = []; $row = mysqli_fetch_assoc($dbquery); $data[] = $row);
        $result .='<div class="list-container">';
        $result .='<ul class="list">';
        foreach($data as $elem){
            $url = $elem['name'];
            $query = "<p class='list-item'>" . "<a class='list-link' href='$url'>" . $elem['name'] . "</a>" . "</p>";
            $result .= $query;
        }
        $result .='</ul>';
        $result .='</div>';
        file_put_contents('./html/mainpage.html',$result);
    }else{
        header('Location: /login');
    }
?>