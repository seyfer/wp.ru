<?/*
������ ������� ��������
=======================
$title - ���������
$content - ����������
$site_theme - ������� ����
*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title><?=$title?></title>
	<meta content="text/html; charset=Windows-1251" http-equiv="content-type">	
	<link rel="stylesheet" type="text/css" media="screen" href="theme/<?=$site_theme?>/style.css" /> 
</head>
<body>
    <div class="main">
        <div id="logo">
	<img src="theme/<?=$site_theme?>/wg.png" />
        </div>
	
        <div class="menu">
        <a href="index.php">�������</a> |
<a href="editor.php">������� ���������</a>
</div>
        <div class="content">
        <?=$content?>
            </div>
</div>
        
        
    <p id="copyright"><a href="http://prog-school.ru">����� ����������������</a> &copy;</p>
        
</body>
</html>
