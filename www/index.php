<?php

/*
 * index - main controller
 */

//какие ошибки
ini_set('error_reporting', E_ALL ^ E_NOTICE);
//показывать или нет
ini_set('display_errors', 1);

//$m_path = $_SERVER['DOCUMENT_ROOT'] . '/Model/';
//$c_path = $_SERVER['DOCUMENT_ROOT'] . '/Control/'

require_once 'Model/M_Startup.php';

$start = M_Startup::startup();

$c_dirs = $start->getSubDirNames('Control/');

$controller = ($_GET['c'] != '') ? $_GET['c'] : 'C_Index';

try {

    $success = 0;
    foreach ($c_dirs as $c_dir) {
        $fhandle = @fopen($_SERVER['DOCUMENT_ROOT'] . "/Control/$c_dir/$controller.php", "r");

        if ($fhandle) {
            $success++;
            $success_dir = $c_dir;
        }

        @fclose($fhandle);
    }
    //Попробуем открыть файл:
    if ($success == 0) {
        throw new Exception();
    }
} catch (Exception $e) {
    $success_dir = "Article";
    $controller = 'C_Index';
}

require ("Control/$success_dir/$controller.php");

$controller = new $controller();

$controller->Request();
?>
