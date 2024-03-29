<?php

require_once 'Core/Database.php';
require_once 'Model/M_Users.php';

class M_Articles {

    private $table = "articles";
    private $tbl_with_pref = "";
    private $DB;
    static private $instance = "";
    private $user;

    public function __construct() {
        $this->DB = Database::getInstance();
        $this->user = M_Users::getInstance();
        $this->tbl_with_pref = $this->DB->tbl_prefix . $this->table;
    }

    static public function Instance() {

        if (self::$instance == null) {
            self::$instance = new M_Articles();
        }

        return self::$instance;
    }

//Список всех статей

    function all() {

        $query = "SELECT * FROM $this->tbl_with_pref ORDER BY id_article DESC";

        $article = array();
        if ($article = $this->DB->Select($query)) {
            return $article;
        } else {
            return FALSE;
        }
    }

//Конкретная статья

    function get($id_article) {

        //Запрос.
        $query = "SELECT * FROM " . $this->tbl_with_pref . "
            WHERE id_article = :id";

        $param = array(
            "id" => $id_article
        );

        if ($article = $this->DB->Select($query, $param)) {
            return $article;
        } else {
            return FALSE;
        }
    }

//Добавить статью

    function add($title, $content) {

        if (!$this->user->Can("ADD_ARTICLE")) {
            return FALSE;
        }

        // Проверка.
        if ($title == '')
            return false;

        $object = array(
            'title' => trim($title),
            'content' => trim($content)
        );

        if ($cnt = $this->DB->Insert($this->tbl_with_pref, $object)) {
            return $cnt;
        } else {
            return FALSE;
        }
    }

//Изменить статью

    function edit($id_article, $title, $content) {

        if (!$this->user->Can("EDIT_ARTICLE")) {
            return FALSE;
        }

        $object = array(
            'title' => $title,
            'content' => $content
        );

        $where = array(
            'id_article = :id_article' => $id_article
        );

        if ($cnt = $this->DB->Update($this->tbl_with_pref, $object, $where)) {
            return $cnt;
        } else {
            return FALSE;
        }
    }

//Удалить статью

    function delete($id_article) {

        if (!$this->user->Can("DELETE_ARTICLE")) {
            return FALSE;
        }

        $where = array(
            'id_article = :id_article' => $id_article
        );

        if ($this->DB->Delete($this->tbl_with_pref, $where)) {

            return true;
        } else {
            return false;
        }
    }

//Короткое описание статьи

    function intro($article) {

        // $article - это ассоциативный массив, представляющий статью
        $intros = array();
        $anonse = 90;

        if ($article) {

            foreach ($article as $intro) {

                $query = "SELECT LEFT(content, :anonse) as intro, id_article
            FROM " . $this->tbl_with_pref . "
            WHERE id_article = :id_intro
                ORDER BY id_article DESC";

                $param = array(
                    'id_intro' => $intro['id_article'],
                    'anonse' => $anonse
                );

                if ($row = $this->DB->Select($query, $param)) {
                    $row = $row[0];
                    $row['intro'] = $row['intro'] . "...";
                    $intros[$row['id_article']] = $row['intro'];
                } else {
                    return FALSE;
                }
            }

            return $intros;
        } else {
            return FALSE;
        }
    }

    function count() {

        $query = "SELECT COUNT(*) FROM $this->tbl_with_pref";

        if ($count = $this->DB->Select($query)) {
            return $count;
        } else {
            return FALSE;
        }
    }

}

?>