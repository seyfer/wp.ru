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
    private $last_id;
    private $random_new;

    function __construct() {
        parent::__construct();
    }

    function OnInput() {
        parent::OnInput();

        $this->page_title .= "Новая статья";
        $this->random_new = rand(0, 3600*36);

        if ($this->IsPost()) {

            $this->ar_title = $_POST['title'];
            $this->ar_content = $_POST['content'];

            $art = M_Articles::Instance();

            if ($this->last_id = $art->add($this->ar_title, $this->ar_content)) {
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
        $sm->cache_id = $sm->get_cache_id($this->random_new . $this->ar_title);
        $sm->cache_lifetime = 600;
        
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
