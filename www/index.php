<?php

/*
 * index - main controller
 */

require_once('model/M_Startup.php');
require_once('model/M_Articles.php');

$start = M_Startup::startup();

$controller = ($_GET['c'] != '') ? $_GET['c'] : 'C_Index';
include "/control/article/$controller.php";

$controller = new $controller($start->site_theme);

$controller->Request();

?>
