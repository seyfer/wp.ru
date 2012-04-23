<?php

/**
 * Description of C_Index
 *
 * @author Admin
 */
require_once '/control/C_Base.php';
require_once '/Core/M_Smarty.php';

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
        $smarty = new M_Smarty();

        $smarty->assign('articles', $this->articles);
        $smarty->assign('intros', $this->intros);

        $this->content = $smarty->fetch('V_Index.tpl');

        /* $this->content = $this->view_include('v_index.php', array(
          'articles' => $this->articles,
          'intros' => $this->intros
          )); */

        parent::OnOutput();
    }

}

?>
