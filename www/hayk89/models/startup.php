<?php

function startup()
{
	// ��������� ����������� � ��.
	$hostname = DB_HOST; 
	$username = DB_USER; 
	$password = DB_PASSWORD;
	$dbname = DB_NAME;
	
	// �������� ���������.
	setlocale(LC_ALL, 'ru_RU.CP1251');	
	
	// ����������� � ��.
	mysql_connect($hostname, $username, $password) or die('No connect with data base'); 
	mysql_query('SET NAMES cp1251');
	mysql_select_db($dbname) or die('No data base');
	
	// �������� ������.
	session_start();		
}


// 
// ����������� �������. 
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