<?php
    session_start();
    $url = $_SERVER['REQUEST_URI'];
    $path = 'php' . $url . '.php';
    if(file_exists($path)){
        $layout = file_get_contents('php/layout.php');
        $content = file_get_contents($path);
        $layout = str_replace('{{ content }}', $content, 
		$layout);
        echo $layout;
    }
    elseif(!file_exists($path)){
        $layout = file_get_contents('php/layout.php');
        $content = file_get_contents('php/404.php');
        $layout = str_replace('{{ content }}', $content, 
		$layout);
        echo $layout;
    }

        ?> 
