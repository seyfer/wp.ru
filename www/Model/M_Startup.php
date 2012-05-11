<?php

class M_Startup {

    private $db_host = "";
    private $db_user = "";
    private $db_passw = "";
    private $db_name = "";
    public $site_theme = "";
    public $site_root_path = "";

    static private $instance = "";

    static public function Instance () {

        if (self::$instance == null) {
            self::$instance = new M_Startup();
        }

        return self::$instance;
    }

    function __construct() {

        require $_SERVER['DOCUMENT_ROOT'] . "/config/site_conf.php";

        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_passw = $db_passw;
        $this->db_name = $db_name;

        $this->site_theme = $site_theme;
        $this->site_root_path = $site_root_path;
    }

    static public function startup() {

        //какие ошибки
        ini_set('error_reporting', E_ALL ^ E_NOTICE);
        //показывать или нет
        ini_set('display_errors', 1);

        // Языковая настройка.
        setlocale(LC_ALL, 'ru_RU.UTF-8');

        //time()
        $timezone = "Asia/Krasnoyarsk";
        if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
        //echo date('d-m-Y H:i:s');

        // Открытие сессии.
        session_start();

        return self::Instance();
    }

    static public function getSubDirNames ($path) {

        $path = rtrim($path, "/") . "/";
        
        $handle = opendir($path);
        $exclude = ".|..";
        $exclude_array = explode("|", $exclude);

        $result = array();
        while(false !== ($filename = readdir($handle))) {
            if(!in_array(strtolower($filename), $exclude_array)) {
                if(is_dir($path . $filename . "/")) {
                    $result[] = $filename;
                }
            }
        }
        return $result;
    }

}

?>