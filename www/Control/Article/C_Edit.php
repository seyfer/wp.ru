<?php

/**
 * Description of C_Edit
 *
 * @author Admin
 */
require_once '/control/C_Base.php';

class C_Edit extends C_Base {

    private $articles;
    private $id_article;      // идентификатор статьи
    private $template = 'V_Edit.tpl';

    function __construct() {
        parent::__construct();
        $this->needLogin = TRUE;
    }

    protected function OnInput() {
        parent::OnInput();

        if ($this->IsPost()) {

            $art = M_Articles::Instance();

            if ($_POST['edit']) {
                $this->page_title .= "Редактировать:" . $_POST['title'];

                $this->id_article = $_POST['id_article'];
                $this->title = $_POST['title'];
                $this->content = $_POST['content'];

                if ($cnt = $art->edit($this->id_article, $this->title, $this->content)) {
                    $this->message = "$cnt Статья успешно обновлена!";
                } else {
                    $this->message = "Статья не обновлена.";
                }
            }

            if ($_POST['delete']) {
                $this->page_title .= "Редактировать:" . $_POST['title'];

                $this->id_article = $_POST['id_article'];
                if ($art->delete($this->id_article)) {
                    header('Location:index.php?c=C_Editor');
                    exit;
                } else {
                    $this->message = "Ошибка удаления статьи";
                }
            }
        } elseif ($this->IsGet()) {
            //передал ли параметр?
            if ($_GET['id']) {

                $this->id_article = $_GET['id'];
                $art = M_Articles::Instance();
                //существует ли статья?
                if ($this->articles = $art->get($this->id_article)) {
                    $this->articles = $this->articles[0];
                    $this->page_title .= "Редактировать:" . $this->articles['title'];

                    $this->title = $this->articles['title'];
                    $this->content = $this->articles['content'];
                    $this->message = "Редактировать статью";
                } else {
                    $this->page_title .= '404';
                    $this->template = 'V_404.tpl';
                }
            } else {
                $this->page_title .= '404';
                $this->template = 'V_404.tpl';
            }
        }
    }

    protected function OnOutput() {


        $sm = new M_Smarty();
        //$smarty->caching = false;

        $this->tpl_path .= $this->article_tpl_path;
        $sm->cache_id = $sm->get_cache_id($this->id_article . $this->title . $this->content . $this->message);

        $vars = array(
            'title' => $this->title,
            'content' => $this->content,
            'id_article' => $this->id_article
        );
        $sm->assign($vars);

        $this->content = $sm->fetch($this->tpl_path . $this->template, $sm->cache_id);

        parent::OnOutput();
    }

}

?>
