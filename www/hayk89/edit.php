<?php
include_once('config.php');
include_once('models/startup.php');
include_once('models/articles.php');

// Установка параметров, подключение к БД, запуск сессии.
startup();

// Обработка отправки формы.
if (isset($_POST['submit']))
{
	if (articles_edit($_GET['id'], $_POST['title'], $_POST['content']))
	{
		header('Location: editor.php');
		die();
	}
	
	$title = $_POST['title'];
	$content = $_POST['content'];
}

//Редактирование
if (isset($_GET['id']) &&  !empty($_GET['id']) && articles_get($_GET['id']))
	{
		$article = articles_get($_GET['id']);
		$id_article = $article['id_article'];
		$title = $article['title'];
		$text = $article['content'];
	}
	else
	{
		header('Location: editor.php');
		die();
	}

//Удаление статьи
if (isset($_POST['delete']))
{	
	if (isset($_GET['id']) &&  !empty($_GET['id']) && articles_delete($_GET['id']))
		{
			header('Location: editor.php');
			die();
		}
}


// Вывод в шаблон.
$content = view('edit', 
		array('article' 	=> 	$article,
		 	  'title' 		=> 	$title,
			  'content'	 	=> 	$text,
			  'id_article'	=> 	$id_article));
			
echo view('main', 
		array('content' 	=> 	$content, 
			'title' 		=> 	$title, 
			'site_name' 	=> 	SITE_NAME,
			'site_tmp' 		=> 	SITE_TMP));

