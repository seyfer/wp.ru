<?php

/*
 * index - main controller
 */

require_once('model/M_Startup.php');

$start = M_Startup::startup();

$c_dirs = $start->getSubDirNames($_SERVER['DOCUMENT_ROOT'] . '/Control');

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

include ("/control/$success_dir/$controller.php");

$controller = new $controller();

$controller->Request();
?>
