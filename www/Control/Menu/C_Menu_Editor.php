<?php

/*
 * menu editor controller
 */

require_once '/control/C_Base.php';

class C_Menu_Editor extends C_Base {

    //
    // Конструктор.
    //
    function __construct() {
        parent::__construct();
    }

    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput() {
        parent::OnInput();

        $this->page_title .= "Редактор меню";

        $menu = M_Menu::Instance();

        if ($this->IsPost()) {

            if ($cnt = $menu->save($_POST)) {
                $this->message = "Успешно сохранено";
            }
            else {
                $this->message = "Меню не обновлено";
            }

             var_dump($cnt);

        } elseif ($this->IsGet()) {

            if ($_GET['up']) {

            }

            if ($_GET['down']) {

            }
        }
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() {
        $menu = M_Menu::Instance();
        $menu_arr = $menu->all();

        $smarty = M_Smarty::getInstance();

        $this->tpl_path .= $this->menu_tpl_path;
        $smarty->cache_id = $smarty->get_cache_id($menu_arr);
        $smarty->assign('menu', $menu_arr);

        $this->content = $smarty->fetch($this->tpl_path . 'V_Menu_Editor.tpl', $smarty->cache_id);

        parent::OnOutput();
    }

}

?>
