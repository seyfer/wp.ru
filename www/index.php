<?php

/*
 * index - main controller
 */

require_once('model/M_Startup.php');
require_once('model/M_Articles.php');

$start = M_Startup::startup();

$controller = ($_GET['c'] != '') ? $_GET['c'] : 'C_Index';

try {
    //Попробуем открыть файл:
    if (!$fhandle = @fopen($_SERVER['DOCUMENT_ROOT'] . "/Control/Article/$controller.php", "r")) {
        throw new Exception();
    } else {
        @fclose($fhandle);
    }
} catch (Exception $e) {
    $controller = 'C_Index';
}

include ("/control/article/$controller.php");

$controller = new $controller();

$controller->Request();
?>
