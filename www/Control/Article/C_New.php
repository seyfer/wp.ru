<?php

/**
 * Description of C_New
 *
 * @author Admin
 */
require_once '/control/C_Base.php';

class C_New extends C_Base {

    private $articles;
    private $message;

    function __construct($site_theme) {
        parent::__construct($site_theme);
    }

    function OnInput() {
        parent::OnInput();

        if ($this->IsPost()) {            

            $this->title = $_POST['title'];
            $this->content = $_POST['content'];
            
            $art = new Articles();

            if ($art->articles_new($this->title, $this->content)) {
                
                header('Location: index.php?c=C_Editor');
		die();                
            }
            else {
                $this->message = 'error';
            }
        } else {
            $this->title = '';
            $this->content = '';

            $art = new Articles();
        }
    }

    function OnOutput() {


        $this->content = parent::view_include('v_new.php', array(
                    'title' => $this->title,
                    'content' => $this->content,
                    'message' => $this->message
                ));

        parent::OnOutput();
    }

}

?>
