<?php

/**
 * Description of C_Base
 * Base controller for this site
 *
 * @author Seyfer
 */

abstract class C_Base extends Controller {

    protected $id_article;      // идентификатор статьи
    protected $title;		// заголовок статьи
    protected $content;		// содержание статьи
    protected $start_time;	// время начала генерации страницы

    //
    // Конструктор.
    //
    function __construct() {
    }

  
    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput() {
        $this->start_time = microtime();
        $this->title = 'Веб Гуру';
        $this->content = '';
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() {
        $vars = array(
            'title' => $this->title,
            'content' => $this->content,
            'site_name'=> SITE_NAME,
            'site_tmp'=>SITE_TMP);
        
        $page = $this->View('main', $vars);
        
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
    protected function View($fileName, $vars = array()) {
	
		parent::View('views/'.SITE_TMP.'/'.$fileName, $vars);
    }	
}

?>
