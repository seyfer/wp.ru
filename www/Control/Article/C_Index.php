<?php

/**
 * Description of C_Index
 *
 * @author Admin
 */
require_once 'Control/C_Base.php';

class C_Index extends C_Base {

    private $articles;     // массив статей
    private $intros;


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

        $this->page_title .= "Главная страница";

        $art = M_Articles::Instance();
        // Извлечение статей.
        if ($this->articles = $art->all()) {
            $this->intros = $art->intro($this->articles);
        } else {
            $this->message = "Ошибка выбоки статей!";
        }
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() {
        $smarty = M_Smarty::getInstance();

        $menu = M_Menu::Instance();

        $this->menu_active = $menu->setActive('C_Index');
        //$this->menu_active = $this->menu_active['sort'];

        $smarty->assign('articles', $this->articles);
        $smarty->assign('intros', $this->intros);

        $this->tpl_path .= $this->article_tpl_path;
        $smarty->cache_id = $smarty->get_cache_id($this->articles);

        $this->content = $smarty->fetch($this->tpl_path . 'V_Index.tpl', $smarty->cache_id);

        parent::OnOutput();
    }

}

?>
