<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('models/m_startup.php');
require_once('models/m_article.php');

$base = new Base();
// запуск сессии.
$base->startup();

$controller = ($_GET['c'] != '') ? $_GET['c'] : 'C_Index';
include "/control/article/$controller.php";

$controller = new $controller($base->site_theme);

$controller->Request();

?>
