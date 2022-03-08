<?php
    session_start();
    if($_SESSION['auth'] == true){
        $connect = mysqli_connect('localhost','root','','phptest');
        $query = "Select * from property";
        $dbquery = mysqli_query($connect,$query) or die(mysqli_error($connect));
        $result ='<div class="headings-container">';
        $result .= '<p class="create-heading"><a class="create-heading-link" href="/additem">Разместить обьявление</a></p>';
        for($data = []; $row = mysqli_fetch_assoc($dbquery); $data[] = $row);
        foreach($data as $elem){
            $query = "<div class='heading-container'>" . "<h2>" . $elem['header'] . "</h2>" . "<p>" . $elem['description'] . "</p>" . "</div>";
            $result .= $query;
        }
        $result .= '</div>';
        echo $result;
    }else{
       header('Location: /login');
    }
?>