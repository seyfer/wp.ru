<?php

function startup()
{
	// Настройки подключения к БД.
	$hostname = DB_HOST; 
	$username = DB_USER; 
	$password = DB_PASSWORD;
	$dbname = DB_NAME;
	
	// Языковая настройка.
	setlocale(LC_ALL, 'ru_RU.CP1251');	
	
	// Подключение к БД.
	mysql_connect($hostname, $username, $password) or die('No connect with data base'); 
	mysql_query('SET NAMES cp1251');
	mysql_select_db($dbname) or die('No data base');
	
	// Открытие сессии.
	session_start();		
}


// 
// Подключение шаблона. 
// 
function view($fileName, $vars = array()) 
{ 
    foreach ($vars as $k => $v) 
    { 
        $$k = $v; 
    } 
   
    ob_start(); 
    include('themes/'.SITE_TMP.'/'.$fileName.'.php'); 
    return ob_get_clean();     
} 