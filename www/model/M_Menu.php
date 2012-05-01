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

        $query = "SELECT sort FROM " . $this->tbl_with_prefix . " WHERE active = '1'";

        $object = array();
        $object['controller'] = $controller;

        $active = $this->DB->Select($query);

        return $active[0];
        var_dump($active);
    }

    public function setActive ($controller) {

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

}

?>
