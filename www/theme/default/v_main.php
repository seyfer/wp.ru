<?/*
Шаблон главной страницы
=======================
$title - заголовок
$content - содержание
$site_theme - текущая тема
*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title><?=$title?></title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">	
	<link rel="stylesheet" type="text/css" media="screen" href="theme/<?=$site_theme?>/style.css" /> 
</head>
<body>
    <div class="main">
        <div id="logo">
            <a href="<?=$site_root_path;?>"><img src="theme/<?=$site_theme?>/wg.png" /></a>
        </div>
	
        <div class="menu">
        <a href="index.php">Главная</a> |
<a href="editor.php">Консоль редактора</a>
</div>
        <div class="content">
        <?=$content?>
            </div>
</div>
        
        
    <p id="copyright"><a href="http://prog-school.ru">Школа Программирования</a> &copy;</p>
        
</body>
</html>
