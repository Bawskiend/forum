<?php
    session_start();
    if($_SESSION['auth'] == true){
        $connect = mysqli_connect('localhost','root','','phptest');
        $query = "Select * from property";
        $dbquery = mysqli_query($connect,$query) or die(mysqli_error($connect));
        for($data = []; $row = mysqli_fetch_assoc($dbquery); $data[] = $row);
        foreach($data as $elem){
            $query = "<h2>" . $elem['header'] . "</h2>" . "<p>" . $elem['text'] . "</p>";
            $result .= $query;
        }
        file_put_contents('./html/property.html',$result);
    }else{
        $query = 'FUCK YOU';
        file_put_contents('./html/property.html',$query);
    }
?>