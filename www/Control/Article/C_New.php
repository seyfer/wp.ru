<?php

/**
 * Description of C_New
 *
 * @author Admin
 */
require_once '/control/C_Base.php';

class C_New extends C_Base {

    private $articles;
    private $ar_title;
    private $ar_content;

    function __construct() {
        parent::__construct();
    }

    function OnInput() {
        parent::OnInput();

        $this->title = $this->title . "Новая статья";

        if ($this->IsPost()) {

            $this->ar_title = $_POST['title'];
            $this->ar_content = $_POST['content'];

            $art = M_Articles::Instance();

            if ($cnt = $art->add($this->ar_title, $this->ar_content)) {                
                header('Location: index.php?c=C_Editor');
                die();
            } else {
                $this->message = 'Ошибка добавления статьи!';
            }
        } else {
            $this->ar_title = '';
            $this->ar_content = '';
        }
    }

    function OnOutput() {


        $this->content = parent::view_include('v_new.php', array(
                    'title' => $this->ar_title,
                    'content' => $this->ar_content,
                    'message' => $this->message
                ));

        parent::OnOutput();
    }

}

?>
