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
    private $template = "V_New.tpl";

    function __construct() {
        parent::__construct();
    }

    function OnInput() {
        parent::OnInput();

        $this->page_title .= "Новая статья";

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

        $sm = M_Smarty::getInstance();

        $this->tpl_path .= $this->article_tpl_path;
        $smarty->cache_id = $this->page_title;
        //var_dump($smarty->cache_id);
        
        $vars = array(
            'title' => $this->ar_title,
            'content' => $this->ar_content,
            'message' => $this->message
        );
        $sm->assign($vars);

        $this->content = $sm->fetch($this->tpl_path . $this->template, $sm->cache_id);

        parent::OnOutput();
    }

}

?>
