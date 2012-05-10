<?php

/**
 * Description of C_Base
 * Base controller for $this->site
 *
 * @author Seyfer
 */
require_once '/Core/Controller.php';
require_once '/Core/M_Smarty.php';
require_once '/model/M_Articles.php';
require_once '/model/M_Users.php';
require_once '/model/M_Menu.php';

abstract class C_Base extends Controller {

    protected $page_title;      // заголовок статьи
    protected $content;         // содержание статьи
    protected $start_time;      // время начала генерации страницы
    protected $message;         //сообщения
    protected $user_block;      // инфо-блок авторизованного пользователя на странице
    protected $needLogin;       // необходимость авторизации
    protected $user;            // авторизованный пользователь
    protected $tpl_path;        //путь до шаблонов
    protected $article_tpl_path = "Article/";   //путь до шаблона статей
    protected $menu_tpl_path = "Menu/";
    protected $user_tpl_path = "User/";

    //protected $menu_arr = array();  //архив для генерации меню
    //protected $menu_active;     //активный пункт меню
    //
    // Конструктор.
    //
    function __construct() {
        $this->title = '';
        $this->content = '';
        $this->menu = '';
        $this->user_block = '';
        $this->needLogin = false;
        $this->user = null;
    }

    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput() {

        $this->start_time = microtime();
        $this->page_title = 'Веб Гуру::';
        $this->content = '';

        $muser = M_Users::getInstance();
        $muser->ClearSessions();

        $this->user = $muser->Get();

        if ($this->user == null) {
            if ($this->needLogin) {
                header("Location: index.php?c=C_User_Auth");
                die();
            }
        } else {
            if ($this->user['name'] == null)
                $this->user['name'] = $this->user['login'];
        }
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() {

        $this->tpl_path = $_SERVER['DOCUMENT_ROOT'] . "/theme/" . SITE_THEME . "/template/";

        $smarty = M_Smarty::getInstance();


        //делаем блок пользователя

        $logined = ($this->user != null);

        $vars_user_block = array(
            'logined' => $logined,
            'user_name' => $this->user['name']
        );
        $smarty->cache_id = $smarty->get_cache_id($this->user);

        $this->user_block = $smarty->fetch($this->tpl_path . $this->user_tpl_path .
                'V_User_Block.tpl', $vars_user_block, $smarty->cache_id);


        //делаем блок меню
        $menu = new M_Menu();
        $menu_arr = $menu->all();
        $menu_active = $menu->getActive();
        $menu_active = $menu_active['sort'];

        $smarty->assign('menu', $menu_arr);
        $smarty->assign('menu_active', $menu_active);
        $smarty->assign('logined',$logined);
        $smarty->cache_id = $smarty->get_cache_id($menu_arr);
        $smarty->cache_id .= $this->menu_active . $logined;

        $menu = $smarty->fetch($this->tpl_path . 'V_Main_Menu.tpl', $smarty->cache_id);

        //делаем основной контент
        $vars = array(
            'title' => $this->page_title,
            'content' => $this->content,
            'site_name' => SITE_NAME,
            'site_theme' => SITE_THEME,
            'site_root_path' => SITE_ROOT_PATH,
            'message' => $this->message,
            'menu' => $menu,
            'user_block' => $this->user_block
        );

        $smarty->assign($vars);
        $smarty->cache_id = $smarty->get_cache_id($this->content .
                $this->page_title . $this->message . $this->user_block);

        $page = $smarty->fetch($this->tpl_path . 'V_Main.tpl', $smarty->cache_id);

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
