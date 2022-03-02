<?php
    session_start();
    $url = $_SERVER['REQUEST_URI'];
    $path = 'php' . $url . '.php';
    $htmlpath = 'html' . $url . '.html';
    if(file_exists($path)){
        $layout = file_get_contents('php/layout.php');
        $content = file_get_contents($htmlpath);
        $layout = str_replace('{{ content }}', $content, 
		$layout);
        include $path;
        echo $layout;
    }
    elseif(!file_exists($path) or !file_exists($htmlpath)){
        $layout = file_get_contents('php/layout.php');
        $content = file_get_contents('html/404.html');
        $layout = str_replace('{{ content }}', $content, 
		$layout);
        echo $layout;
    }
    else{
        echo 'fuck of';
    }

        ?> 
