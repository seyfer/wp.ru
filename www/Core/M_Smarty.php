<?php

/**
 * Description of M_Smarty
 *
 * @author Admin
 */
require_once SMARTY_DIR . 'Smarty.class.php';

class M_Smarty extends Smarty {

    function __construct() {
        parent::__construct();

        $this->template_dir = $_SERVER['DOCUMENT_ROOT'] . "/theme/" . SITE_THEME . "/template/";
        $this->compile_dir = $_SERVER['DOCUMENT_ROOT'] . "/theme/" . SITE_THEME . "/compile/";
        $this->config_dir = $_SERVER['DOCUMENT_ROOT'] . "/theme/" . SITE_THEME . "/config/";
        $this->cache_dir = $_SERVER['DOCUMENT_ROOT'] . "/theme/" . SITE_THEME . "/cache/";

        $this->compile_check = true;
        $this->caching = false;

        $this->assign('site_name', SITE_NAME);
        $this->assign('site_root_path', SITE_ROOT_PATH);
        $this->assign('site_theme', SITE_THEME);
    }

}

?>