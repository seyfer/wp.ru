<?php

/**
 * Description of C_Index
 *
 * @author Admin
 */
require_once '/control/C_Base.php';

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

        $smarty->assign('articles', $this->articles);
        $smarty->assign('intros', $this->intros);  
        
        $this->tpl_path .= $this->article_tpl_path;
        $smarty->cache_id = count($this->articles) . $this->page_title;
        
        //var_dump($smarty->cache_id);
        
        $this->content = $smarty->fetch($this->tpl_path . 'V_Index.tpl', $smarty->cache_id);

        parent::OnOutput();
    }

}

?>
