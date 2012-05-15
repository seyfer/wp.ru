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

//стартуем начальные параметры
$start = M_Startup::startup();

//получаем директории из контроллера
$c_dirs = $start->getSubDirNames('Control/');

//если контроллер не передан - по умолчанию
$controller = ($_GET['c'] != '') ? $_GET['c'] : 'C_Index';

try {

    $success = 0;
    foreach ($c_dirs as $c_dir) {
        //перебираем папки, ищем файл
        $fhandle = @fopen($_SERVER['DOCUMENT_ROOT'] . "/Control/$c_dir/$controller.php", "r");

        if ($fhandle) {
            //нашли, запоминаем где
            $success++;
            $success_dir = $c_dir;
        }

        @fclose($fhandle);
    }
    //не нашли, кидаем эксепшн
    if ($success == 0) {
        throw new Exception();
    }
} catch (Exception $e) {
    //по умолчанию
    $success_dir = "Article";
    $controller = 'C_Index';
}

//вызываем таки контроллер
require ("Control/$success_dir/$controller.php");

$controller = new $controller();

$controller->Request();
?>
