<?php

class Base {

    private $db_host = "";
    private $db_user = "";
    private $db_passw = "";
    private $db_name = "";
    public $site_theme = "";
    public $site_root_path = "";

    function __construct() {

        include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";        

        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_passw = $db_passw;
        $this->db_name = $db_name;

        $this->site_theme = $site_theme;
        $this->site_root_path = $site_root_path;
    }

    public function startup() {

        //какие ошибки
        ini_set('error_reporting', E_ALL ^ E_NOTICE);
        //показывать или нет
        ini_set('display_errors', 1);

        // Языковая настройка.
        setlocale(LC_ALL, 'ru_RU.UTF-8');

        // Открытие сессии.
        session_start();
    }

    public function view_include($fileName, $params = array()) {

        //создаются переменные с названием КЕЙ и значением ВАЛ
        foreach ($params as $key => $val) {
            $$key = $val;
        }

        ob_start();
        include "theme/" . $this->site_theme . "/" . $fileName;
        return ob_get_clean();
    }

}

?>