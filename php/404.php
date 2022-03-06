<?php
    $back = $_SERVER['HTTP_REFERER'];
    $content = str_replace('{{ back }}', "<a href='$back'>Вернуться назад</a>", 
		$content);
?>