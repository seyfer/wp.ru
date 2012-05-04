<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '/control/C_Base.php';

class C_User_Auth extends C_Base {

    private $login;
    private $remember;

    function __construct() {
        parent::__construct();
    }

    function OnInput() {
        parent::OnInput();

        $this->page_title .= "Редактор меню";

        $user = new M_Users();

        if ($this->IsPost()) {

            if ($_POST['authorization']) {
                if ($_POST['login'] != '' && $_POST['password'] != '') {

                    $this->login = $_POST['login'];
                    $this->remember = $_POST['remember'];
                    if ($user->Login($this->login, $_POST['password'], $this->remember)) {
                        header("Location: index.php");
                        exit;
                    } else {
                        $this->message = "Авторизация не удалась";
                    }
                } else {
                    $this->message = "Вы ввели не все данные!";
                }
            }
        } else {
            $user->Logout();
        }
    }

    function OnOutput() {

        $menu = M_Menu::Instance();

        $this->menu_active = $menu->setActive('C_User_Auth');

        $smarty = M_Smarty::getInstance();

        $this->tpl_path .= $this->user_tpl_path;
        $smarty->cache_id = $smarty->get_cache_id($this->login . $this->remember);

        $vars = array(
            'login' => $this->login,
            'remember' => $this->remember
        );

        $smarty->assign($vars);

        $this->content = $smarty->fetch($this->tpl_path . 'V_User_Auth.tpl', $smarty->cache_id);

        parent::OnOutput();
    }

}

?>
