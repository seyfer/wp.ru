<?php

include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";

function startup()
{
	// ��������� ����������� � ��.
	$hostname = DB_HOST; 
	$username = DB_USER; 
	$password = DB_PSWD;
	$dbName = DB_NAME;
	
	// �������� ���������.
	setlocale(LC_ALL, 'ru_RU.CP1251');	
	
	// ����������� � ��.
	$conn = mysql_connect($hostname, $username, $password) or die('No connect with data base'); 
	mysql_query('SET NAMES cp1251');
	mysql_select_db($dbName, $conn) or die('No data base');

	// �������� ������.
	session_start();
		
}

function view_include($fileName, $params = array()) {
    
    //��������� ���������� � ��������� ��� � ��������� ���
    foreach ($params as $key => $val) {
        $$key = $val;
    }
    
    ob_start();
    include "theme/" . $site_theme . "/" . $fileName;
    return ob_get_clean();
}

?>
