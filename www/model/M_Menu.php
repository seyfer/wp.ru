<?php

/*
 * menu model
 */

require_once '/core/Database.php';

class M_Menu {

    private $DB;
    private $table = "menu";
    private $tbl_with_prefix;
    static private $instance;

    static public function Instance() {

        if (self::$instance == null) {
            self::$instance = new M_Menu();
        }

        return self::$instance;
    }

    function __construct() {
        $this->DB = Database::getInstance();
        $this->tbl_with_prefix = $this->DB->tbl_prefix . $this->table;
    }

    public function all() {

        $query = "SELECT * FROM " . $this->tbl_with_prefix;

        $menus = $this->DB->Select($query);

        return $menus;
    }

    public function getActive() {

        $query = "SELECT sort FROM " . $this->tbl_with_prefix . "
            WHERE active = '1' ORDER BY SORT ASC";

        $active = $this->DB->Select($query);

        return $active[0];
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

    public function sortUp($id_menu) {

    }

    public function sortDown($id_menu) {

    }

    public function save($menu_array) {

        //TODO: false ??? na 2m

        $upd_cnt = 0;

        if ($menu_array) {
            foreach ($menu_array as $menu_item) {
                if (is_array($menu_item)) {

                    $object = array(
                        'ancor' => $menu_item['ancor'],
                        'link' => $menu_item['link'],
                        'sort' => $menu_item['sort']
                    );

                    $where = array(
                        'id_menu = :id_menu' => $menu_item['id_menu']
                    );

                    if (!$this->DB->Update($this->tbl_with_prefix, $object, $where)) {
                        return FALSE;
                    }

                    $upd_cnt++;
                }
            }
            return $upd_cnt;
        } else {
            return false;
        }
    }

    public function add() {

    }

}

?>
