<?php
    session_start();
    $url = $_SERVER['REQUEST_URI'];
    $path = 'php' . $url . '.php';
    $htmlpath = 'html' . $url . '.html';
    if(file_exists($path)){
        $layout = file_get_contents('html/layout.html');
        $content = file_get_contents($htmlpath);
        include_once('php/layout.php');
        $layout = str_replace('{{ content }}', $content, 
		$layout);
        include $path;
        echo $layout;
    }
    elseif(!file_exists($path) or !file_exists($htmlpath)){
        $layout = file_get_contents('html/layout.html');
        $content = file_get_contents('html/404.html');
        include_once('php/404.php');
        $layout = str_replace('{{ content }}', $content, $layout);
        echo $layout;
    }
    else{
        echo 'fuck of';
    }

        ?> 
