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
    protected $page_title;  // заголовок статьи
    protected $content;  // содержание статьи
    protected $start_time; // время начала генерации страницы    
    protected $message;

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
        $this->page_title = 'Веб Гуру::';
        $this->content = '';
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() {

        $smarty = new M_Smarty();

        $smarty->assign('title', $this->page_title);
        $smarty->assign('content', $this->content);
        $smarty->assign('site_name', SITE_NAME);
        $smarty->assign('site_theme', SITE_THEME);
        $smarty->assign('site_root_path', SITE_ROOT_PATH);
        $smarty->assign('message', $this->message);

        $page = $smarty->fetch('V_Main.tpl');

        /* $vars = array(
          'title' => $this->page_title,
          'content' => $this->content,
          'site_name' => SITE_NAME,
          'site_theme' => SITE_THEME,
          'site_root_path' => SITE_ROOT_PATH,
          'message' => $this->message
          );

          $page = $this->view_include('v_main.php', $vars); */

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

        // !!!!!!!!!! вывод страницы
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
