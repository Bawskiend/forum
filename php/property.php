<?php
    session_start();
    if($_SESSION['auth'] == true){
        $connect = mysqli_connect('localhost','root','','phptest');
        $query = "Select * from property";
        $dbquery = mysqli_query($connect,$query) or die(mysqli_error($connect));
        $result ='<div class="headings-container">';
        $result .= '<p class="create-heading"><a class="create-heading-link" href="/createheading">Разместить обьявление</a></p>';
        for($data = []; $row = mysqli_fetch_assoc($dbquery); $data[] = $row);
        foreach($data as $elem){
            $query = "<h2>" . $elem['header'] . "</h2>" . "<p>" . $elem['text'] . "</p>";
            $result .= $query;
        }
        $result .= '</div>';
        file_put_contents('./html/property.html',$result);
    }else{
       header('Location: /login');
    }
?>