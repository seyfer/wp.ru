<?php

/**
 * Description of M_Smarty
 *
 * @author Admin
 */
require_once SMARTY_DIR . 'Smarty.class.php';

class M_Smarty extends Smarty {

    static private $instance;

    function __construct() {
        parent::__construct();

        $this->template_dir = $_SERVER['DOCUMENT_ROOT'] . "/theme/" . SITE_THEME . "/template/";
        $this->compile_dir = $_SERVER['DOCUMENT_ROOT'] . "/theme/" . SITE_THEME . "/compile/";
        $this->config_dir = $_SERVER['DOCUMENT_ROOT'] . "/theme/" . SITE_THEME . "/config/";
        $this->cache_dir = $_SERVER['DOCUMENT_ROOT'] . "/theme/" . SITE_THEME . "/cache/";

        //$this->debug_tpl = $_SERVER['DOCUMENT_ROOT'] . "/theme/" . SITE_THEME . "/template/";
        //$this->debugging = false;

        $this->compile_check = true;
        $this->caching = false;
        //$this->cache_modified_check = TRUE;
        $this->cache_lifetime = 3600;
    }

    //ф-я получения экземпляра
    static public function getInstance() {

        if (!self::$instance) {
            self::$instance = new M_Smarty();
        }

        return self::$instance;
    }

    //получение ИД по изменениям в запросах и сессии
    function get_cache_id_by_req() {
        $request = $_REQUEST;
        unset($request[session_name()]);
        return md5(serialize($request) . serialize($_SESSION));
    }
    
    //получение ид по уникальным данным
    function get_cache_id ($data) {        
        return md5(md5(serialize($data)));
    }

}

?>
