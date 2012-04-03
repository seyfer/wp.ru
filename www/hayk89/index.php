<?php
include_once('config.php');
include_once('models/startup.php');
include_once('models/articles.php');

// ��������� ����������, ����������� � ��, ������ ������.
startup();

//�������� ��������
$title = '������� ��������';

// ���������� ������.
$articles = articles_all();

// ����� � ������.
$content = view('index', 
		array('articles' => $articles));
			
echo view('main', 
		array('content' 	=> 	$content, 
			'title' 		=> 	$title, 
			'site_name' 	=> 	SITE_NAME,
			'site_tmp' 		=> 	SITE_TMP));

