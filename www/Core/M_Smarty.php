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
        $this->caching = true;
        //$this->cache_modified_check = TRUE;
        //$this->cache_lifetime = 3600;

        $this->assign('site_name', SITE_NAME);
        $this->assign('site_root_path', SITE_ROOT_PATH);
        $this->assign('site_theme', SITE_THEME);
    }
    
    static public function getInstance () {
        
        if (!self::$instance) {
            self::$instance = new M_Smarty();
        }
        
        return self::$instance;
    }

}

?>
