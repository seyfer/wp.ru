<?php

/*
 * menu model
 */

require_once 'Core/Database.php';
require_once 'Model/M_Users.php';

class M_Menu {

    private $DB;        //для экземпляра БД
    private $user;      //для экземпляра пользователя

    private $table = "menu";
    private $tbl_with_prefix;
    static private $instance;
    private $maxs;      //максимальное зн-е сортировки
    private $sort;      //сортировка выбранного элемента
    public $active;     //активный пункт меню

    static public function Instance() {

        if (self::$instance == null) {
            self::$instance = new M_Menu();
        }

        return self::$instance;
    }

    function __construct() {
        $this->DB = Database::getInstance();
        $this->user = M_Users::getInstance();
        $this->tbl_with_prefix = $this->DB->tbl_prefix . $this->table;
    }

    public function all() {

        $query = "SELECT * FROM " . $this->tbl_with_prefix . " ORDER BY sort ASC";

        $menus = $this->DB->Select($query);

        return $menus;
    }

    //получить активное меню
    public function getActive() {

        if ($this->active) {
            return $this->active;
        } else {

            $query = "SELECT sort FROM " . $this->tbl_with_prefix . "
            WHERE active = '1' ";

            $active = $this->DB->Select($query);

            $this->active = $active[0];

            return $active[0];
        }
    }

    public function setActive($controller) {

        $object = array(
            'active' => 1
        );

        $where = array(
            'link = :controller' => $controller
        );

        $this->DB->Update($this->tbl_with_prefix, $object, $where);

        $object = array(
            'active' => 0
        );

        $where = array(
            'link != :controller' => $controller
        );

        $this->DB->Update($this->tbl_with_prefix, $object, $where);
    }

    //поднять вверх
    public function sortUp($id_menu) {

        if (!$this->user->Can("EDIT_MENU")) {
            return FALSE;
        }

        if ($this->sort) {
            $sort = $this->sort;
        } else {

            $query = "SELECT sort FROM $this->tbl_with_prefix WHERE id_menu = :id_menu ";

            $object = array(
                'id_menu' => $id_menu
            );

            $sort = $this->DB->Select($query, $object);

            $sort = $sort[0]['sort'];

            $this->sort = $sort;
        }

        if ($sort <= 1) {
            return FALSE;
        }

        $object = array(
            'sort' => $sort
        );

        $where = array(
            'sort < :sort ORDER BY sort DESC LIMIT 1' => $sort
        );

        $this->DB->Update($this->tbl_with_prefix, $object, $where);

        $sortup = $sort - 1;

        $object = array(
            'sort' => $sortup
        );

        $where = array(
            'id_menu = :id_menu' => $id_menu
        );

        $this->DB->Update($this->tbl_with_prefix, $object, $where);
    }

    //ф-я опускания пункта вниз
    public function sortDown($id_menu) {

        if (!$this->user->Can("EDIT_MENU")) {
            return FALSE;
        }

        if ($this->sort) {
            $sort = $this->sort;
        } else {
            $query = "SELECT sort
                FROM $this->tbl_with_prefix
                WHERE id_menu = :id_menu ";

            $object = array(
                'id_menu' => $id_menu
            );

            $sort = $this->DB->Select($query, $object);

            $sort = $sort[0]['sort'];

            $this->sort = $sort;
        }

        if ($this->maxs) {
            $maxs = $this->maxs;
        } else {
            $query = "SELECT MAX(sort) AS maxs FROM $this->tbl_with_prefix";

            $maxs = $this->DB->Select($query);

            $maxs = $maxs[0]['maxs'];

            $this->maxs = $maxs;
        }

        if ($sort >= $maxs) {
            return FALSE;
        }

        $object = array(
            'sort' => $sort
        );

        $where = array(
            'sort > :sort ORDER BY sort ASC LIMIT 1' => $sort
        );

        $this->DB->Update($this->tbl_with_prefix, $object, $where);

        $sortup = $sort + 1;

        $object = array(
            'sort' => $sortup
        );

        $where = array(
            'id_menu = :id_menu' => $id_menu
        );

        $this->DB->Update($this->tbl_with_prefix, $object, $where);
    }

    public function save($menu_array) {

        if (!$this->user->Can("EDIT_MENU")) {
            return FALSE;
        }

        $upd_cnt = 0;

        if ($menu_array) {
            foreach ($menu_array as $menu_item) {
                if (is_array($menu_item)) {

                    if ($menu_item['show_m'])
                    {
                        $show = 1;
                    }
                    else {
                        $show = 0;
                    }

                    $object = array(
                        'ancor' => $menu_item['ancor'],
                        'link' => $menu_item['link'],
                        'sort' => $menu_item['sort'],
                        'show_m' => $show
                    );

                    $where = array(
                        'id_menu = :id_menu' => $menu_item['id_menu']
                    );

                    $this->DB->Update($this->tbl_with_prefix, $object, $where);

                    $upd_cnt++;
                }
            }
            return $upd_cnt;
        } else {
            return false;
        }
    }

    public function add($ancor, $link) {

        if (!$this->user->Can("EDIT_MENU")) {
            return FALSE;
        }

        if ($this->maxs) {
            $maxs = $this->maxs;
        } else {
            $query = "SELECT MAX(sort) AS maxs FROM $this->tbl_with_prefix";

            $maxs = $this->DB->Select($query);

            $maxs = $maxs[0]['maxs'];

            $this->maxs = $maxs;
            $maxs++;
        }

        $show = 1;
        $object = array(
            'ancor' => $ancor,
            'link' => $link,
            'sort' => $maxs,
            'show_m' => $show
        );

        if ( $this->DB->Insert($this->tbl_with_prefix, $object)) {
            return true;
        }
        else {
            return FALSE;
        }
    }

    public function delete ($id_menu) {

        if (!$this->user->Can("EDIT_MENU")) {
            return FALSE;
        }

        $where = array(
            'id_menu = :id_menu' => $id_menu
        );

        if ($this->DB->Delete($this->tbl_with_prefix, $where)) {
            return true;
        }
        else {
            return FALSE;
        }

    }

}

?>
