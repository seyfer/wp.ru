<?php

include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";

function startup()
{
	/* Настройки подключения к БД.
	$hostname = DB_HOST; 
	$username = DB_USER; 
	$password = DB_PSWD;
	$dbName = DB_NAME; */
	
	// Языковая настройка.
	setlocale(LC_ALL, 'ru_RU.UTF-8');	
	
	/* Подключение к БД.
	$conn = mysql_connect($hostname, $username, $password) or die('No connect with data base'); 
	mysql_query('SET NAMES utf-8');
	mysql_select_db($dbName, $conn) or die('No data base'); */

	// Открытие сессии.
	session_start();
		
}

function view_include($fileName, $params = array()) {
    
    //создаются переменные с названием КЕЙ и значением ВАЛ
    foreach ($params as $key => $val) {
        $$key = $val;
    }
    
    ob_start();
    include "theme/" . $site_theme . "/" . $fileName;
    return ob_get_clean();
}

?>
