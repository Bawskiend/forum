<?php
    session_start();
    if($_SESSION['auth'] == true){
        $connect = mysqli_connect('localhost','root','','phptest');
        $query = "Select * from heading";
        $result ='';
        file_put_contents('./html/mainpage.html','');
        $dbquery = mysqli_query($connect,$query) or die(mysqli_error($connect));
        for($data = []; $row = mysqli_fetch_assoc($dbquery); $data[] = $row);
        foreach($data as $elem){
            $query = "<p>" . $elem['name'] . "</p>" . "</br>";
            $result += $query;
        }
        file_put_contents('./html/mainpage.html',$result);
    }else{

    }
?>