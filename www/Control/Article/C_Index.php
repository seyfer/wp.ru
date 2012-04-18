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
    function __construct($site_theme) {
        parent::__construct($site_theme);
    }

    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput() {
        parent::OnInput();        

        $art = M_Articles::Instance();
        // Извлечение статей.
        $this->articles = $art->all();
        $this->intros = $art->intro($this->articles);
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
