<?php
include_once('config.php');
include_once('models/startup.php');
include_once('models/articles.php');

// Установка параметров, подключение к БД, запуск сессии.
startup();

$id = (int)($_GET['id']);

if (isset($id) &&  !empty($id) && articles_get($id))
{
	$article = articles_get($id);
	$id_article = $article['id_article'];
	$title = $article['title'];
	$text = $article['content'];
}
else
{
	header('Location: index.php');
	die();
}

//Вывод в шаблон
$content = view('article', 
		array('article' 	=> 	$article,
		 	  'title' 		=> 	$title,
			  'content'	 	=> 	$text,
			  'id_article'	=> 	$id_article));
			
echo view('main', 
		array('content' 	=> 	$content, 
			'title' 		=> 	$title, 
			'site_name' 	=> 	SITE_NAME,
			'site_tmp' 		=> 	SITE_TMP));