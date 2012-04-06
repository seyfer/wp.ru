<?php

include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";

function startup() {

    global $db_host;
    global $db_user;
    global $db_passw;
    global $db_name;
   
    //Настройки подключения к БД.
    $db_host = DB_HOST;
    $db_user = DB_USER;
    $db_passw = DB_PSWD;
    $db_name = DB_NAME;

    // Языковая настройка.
    setlocale(LC_ALL, 'ru_RU.UTF-8');    

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