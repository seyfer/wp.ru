<?php

/**
 * Description of C_Base
 * Base controller for this site
 *
 * @author Seyfer
 */
require_once '/core/controller.php';

abstract class C_Base extends Controller {

    protected $id_article;      // идентификатор статьи
    protected $title;  // заголовок статьи
    protected $content;  // содержание статьи
    protected $start_time; // время начала генерации страницы
    protected $site_theme;   

    //
    // Конструктор.
    //
    function __construct($site_theme) {
        
        $this->site_theme = $site_theme; 
        
    }

    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput() {        
        
        $this->start_time = microtime();
        $this->title = 'Веб Гуру::';
        $this->content = '';
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() {
        $vars = array(
            'title' => $this->title,
            'content' => $this->content,
            'site_name' => SITE_NAME,
            'site_theme' => $this->site_theme);
        
        echo $site_root_path;

        $page = $this->view_include('v_main.php', $vars);

        // Время генерации страницы
        $time_gen = microtime() - $this->start_time;
        $page .= "<!-- Время генерации страницы: $time_gen сек.-->
        <!-- Размер страницы: ";

        //
        //Вычисление времени генерации и размера страницы
        //
        // Конечный текст
        $final_text = " байт. -->";

        //Длина всех символов, кроме числа байт
        $size_text = strlen($page) + strlen($final_text);

        //Длина числа байт
        $size_num = strlen($size_text);

        //Вывод общей длины всех символов плюс конечный текст
        $page .= ($size_num + $size_text) . $final_text;
        echo $page;
    }

    //
    // Подключение шаблона.
    //
    public function view_include($fileName, $vars = array()) {

        $this->content = parent::view_include($fileName, $vars);
        return $this->content;
    }

}

?>
