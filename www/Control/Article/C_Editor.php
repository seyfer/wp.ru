<?php

/**
 * Description of C_Editor
 *
 * @author Admin
 */
require_once '/control/C_Base.php';

class C_Editor extends C_Base {

    private $articles;     // массив статей
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

        $art = M_Articles::Instance();
        // Извлечение статей.
        $this->articles = $art->all();
        $this->page_title .= "Редактирование статей";
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() {
        $smarty = M_Smarty::getInstance();

        $menu = M_Menu::Instance();

        $this->menu_active = $menu->setActive('C_Editor');
        //$this->menu_active = $this->menu_active['sort'];

        $vars = array(
            'articles' => $this->articles
        );
        $smarty->assign($vars);

        $this->tpl_path .= $this->article_tpl_path;
        $smarty->cache_id = $smarty->get_cache_id($this->articles);

        $this->content = $smarty->fetch($this->tpl_path . 'V_Editor.tpl', $smarty->cache_id);

        parent::OnOutput();
    }

}

?>
