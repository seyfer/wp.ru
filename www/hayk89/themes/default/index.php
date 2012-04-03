<?/*
Шаблон вывода всех статей на главной
=======================
$articles - список статей

статья:
id_article - идентификатор
title - заголвок
content - текст
*/?>

<? foreach ($articles as $article): ?>
			
	<h1>
		<a href="article.php?id=<?=$article['id_article']?>">
			<?=$article['title']?>
		</a> 
	</h1>
	<div class="text">
		<?=articles_intro($article['content'])?>
	</div>		
<? endforeach ?>
