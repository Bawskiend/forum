<?php
    session_start();
    $url = $_SERVER['REQUEST_URI'];
    function rgp($url) { 
        return preg_replace('/^([^?]+)(\?.*?)?(#.*)?$/', '$1$3', $url);
    }
    $url = rgp($url);
    if($url == '' or $url == '/'){
        header('Location: mainpage');
    }
    $content = 'php' . $url . '.php';
    if(file_exists($content)){
        $header = 'php/header.php';
        ob_start();
    }
    elseif(!file_exists($content)){
        $header = 'php/header.php';
        $content = 'php/404.php';
    }

        ?>
<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <head>
		<title>title</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<header class="header">
            <? include_once $header ?>
            </header>
            <main class="app-container">
			<? include_once $content?>
		</div>
		</main>
		<footer class="footer">
        <? //include_once $footer?> 
			
		</footer>
        <? if($url == '/login'){
            echo "<script src='js/script.js'></script>";
        } ?>
	</body>
</html>         
