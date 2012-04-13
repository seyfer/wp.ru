<?php

/**
 * Description of C_Index
 *
 * @author Admin
 */
require_once '/control/C_Base.php';
require_once '/models/m_article.php';

class C_Index extends C_Base {

    private $articles;     // массив статей
    private $intros;    

    //
    // Конструктор.
    //
    function __construct($site_theme) {
        parent::__construct($site_theme);
    }

    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput() {
        parent::OnInput();        

        $art = new Articles();
        // Извлечение статей.
        $this->articles = $art->articles_all();
        $this->intros = $art->articles_intro($this->articles);
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() {
        $this->content = $this->view_include('v_index.php', 
                array(
                    'articles' => $this->articles,
                    'intros' => $this->intros
                ));

        parent::OnOutput();
    }

}

?>
