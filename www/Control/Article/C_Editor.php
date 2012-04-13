<?php

/**
 * Description of C_Editor
 *
 * @author Admin
 */
require_once '/control/C_Base.php';
require_once '/model/m_article.php';

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

        $art = new Articles();
        // Извлечение статей.
        $this->articles = $art->articles_all();
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
