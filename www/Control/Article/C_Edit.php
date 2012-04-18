<?php

/**
 * Description of C_Edit
 *
 * @author Admin
 */
require_once '/control/C_Base.php';

class C_Edit extends C_Base {

    private $articles;
    private $success = false;
    private $template = 'v_edit.php';

    function __construct($site_theme) {
        parent::__construct($site_theme);
    }

    protected function OnInput() {
        parent::OnInput();

        if ($this->IsPost()) {

            $art = new M_Articles();

            if ($_POST['edit']) {
                $this->page_title = $this->page_title . $_POST['title'];

                $this->id_article = $_POST['id_article'];

                $this->title = $_POST['title'];

                $this->content = $_POST['content'];

                if ($art->edit($this->id_article, $this->title, $this->content)) {
                    $this->success = TRUE;
                }
            }

            if ($_POST['delete']) {
                $this->page_title = $this->page_title . $_POST['title'];

                $this->id_article = $_POST['id_article'];
                if ($art->delete($this->id_article)) {
                    header('Location:index.php?c=C_Editor');
                    exit;
                }
            }
        } elseif ($this->IsGet()) {
            //передал ли параметр?
            if ($_GET['id']) {

                $this->id_article = $_GET['id'];
                $art = new M_Articles();
                //существует ли статья?
                if ($this->articles = $art->get($this->id_article)) {
                    
                    $this->page_title = $this->page_title . $this->articles['title'];

                    $this->title = $this->articles['title'];
                    $this->content = $this->articles['content'];
                } else {
                    $this->page_title = $this->page_title . '404';
                    $this->template = 'v_404.php';
                }
            } else {
                $this->page_title = $this->page_title . '404';
                $this->template = 'v_404.php';
            }
        }
    }

    protected function OnOutput() {

        // Вывод в шаблон.
        $this->content = $this->view_include($this->template, array(
            'title' => $this->title,
            'content' => $this->content,
            'success' => $this->success,
            'id_article' => $this->id_article
                ));

        parent::OnOutput();
    }

}

?>
