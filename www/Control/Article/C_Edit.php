<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_Edit
 *
 * @author Admin
 */
require_once '/control/C_Base.php';

class C_Edit extends C_Base {

    //put your code here

    private $articles;
    private $success = false;

    function __construct($site_theme) {
        parent::__construct($site_theme);
    }

    protected function OnInput() {
        parent::OnInput();

        if ($this->IsPost()) {

            $art = new Articles;

            if ($_POST['edit']) {

                $this->id_article = $_POST['id_article'];
                $this->title = $this->title . $_POST['title'];
                $this->content = $_POST['content'];

                if ($art->articles_edit($this->id_article, $this->title, $this->content)) {
                    $this->success = TRUE;
                }
            }

            if ($_POST['delete']) {

                $this->id_article = $_POST['id_article'];
                if ($art->articles_delete($this->id_article)) {
                    header('Location:index.php?c=C_Editor');
                    exit;
                }
                
            }
        } elseif ($this->IsGet()) {
            $art = new Articles();
            $this->id_article = $_GET['id'];

            $this->articles = $art->articles_get($this->id_article);

            $this->title = $this->articles['title'];
            $this->content = $this->articles['content'];
        } else {
            
        }
    }

    protected function OnOutput() {

        // Вывод в шаблон.
        $this->content = $this->view_include('v_edit.php', array(
            'title' => $this->title,
            'content' => $this->content,
            'success' => $this->success,
            'id_article' => $this->id_article
                ));

        parent::OnOutput();
    }

}

?>
