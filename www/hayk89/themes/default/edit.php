<?/*
������ �������������� ������
=======================
$title - ���������
$content - ����������
*/?>

	<h1>�������������</h1>
	<div class="center">
		<form method="post">
			<lable>��������:</lable>
			<input type="text" name="title" value="<?=$title?>" />
			<br/>
			<lable>����������:</lable>
			<textarea name="content"><?=$content?></textarea>
			<br/>
			<input type="submit" name="submit" value="���������" /> 
			<input type="submit" name="delete" value="�������" /> 
					
		</form>
	</div>
