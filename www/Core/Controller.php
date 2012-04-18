<?php
/**
 * Description of Controller
 * This is the base Controller at all.
 *
 * @author Seyfer
 */
class Controller {  
    

    //
    // Конструктор.
    //
    function __construct() {
    }

    //
    // Полная обработка HTTP запроса.
    //
    public function Request() {
        $this->OnInput();
        $this->OnOutput();
    }

    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput() {
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() {
    }

    //
    // Запрос произведен методом GET?
    //
    protected function IsGet() {
        return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

    //
    // Запрос произведен методом POST?
    //
    protected function IsPost() {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    //
    // Подключение шаблона.
    //
    
     public function view_include($fileName, $params = array()) {

        //создаются переменные с названием КЕЙ и значением ВАЛ
        foreach ($params as $key => $val) {
            $$key = $val;
        }

        ob_start();
        require 'theme/' . SITE_THEME. '/' . $fileName;        
        return ob_get_clean();
        
    }
}

?>
