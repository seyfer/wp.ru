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
        $this->title = $this->title . "Редактирование";
    }
    
      //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() {
        $this->content = $this->view_include('v_editor.php', 
                array(
                    'articles' => $this->articles                    
                ));

        parent::OnOutput();
    }
    
}

?>
