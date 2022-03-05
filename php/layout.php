<?php
session_start();
$headerlink = "<a href='/logout'>Выйти</a>"

?>

<meta charset="UTF-8">
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<title>title</title>
	</head>
	<body>
		<header class="header">
			{{ header }}
		</header>
		<main class="main">
		<div class="app-container">
		{{ content }}
		</div>
		</main>
		<footer class="footer"></footer>
	</body>
</html>