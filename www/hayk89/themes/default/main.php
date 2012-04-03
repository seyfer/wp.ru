<?/*
������ ������� ��������
=======================
$site_name - �������� �����
$title - �������� ��������
$site_tmp -�������� ���� ����������
$content - ����������
*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title><?=$site_name?> | <?=$title?></title>
	<meta content="text/html; charset=Windows-1251" http-equiv="content-type">	
	<link rel="stylesheet" type="text/css" media="screen" href="themes/<?=$site_tmp?>/style.css" /> 
</head>

<body>
<div class="main">
	<div id="logo">
		<a href="index.php"><img border=0 src="themes/<?=$site_tmp?>/wg.png" /></a>
	</div>
	<div class="menu">
		<a href="index.php"><b>�������</b></a>		
		<a href="editor.php"><b>������� ���������</b></a>
	</div>

	<div class="content">
		<?=$content?>
	</div>
</div>
<p id="copyright">Copyright &copy; <?=date('Y')?> "<?=$site_name?>". All rights reserved.</p>			

</body>
</html>