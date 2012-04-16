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
    private $ar_title;
    private $ar_content;

    function __construct($site_theme) {
        parent::__construct($site_theme);
    }

    function OnInput() {
        parent::OnInput();
        
        $this->title = $this->title . "Новая статья";

        if ($this->IsPost()) {            

            $this->ar_title = $_POST['title'];
            $this->ar_content = $_POST['content'];           
            
            $art = new Articles();

            if ($art->articles_new($this->ar_title, $this->ar_content)) {
                
                header('Location: index.php?c=C_Editor');
		die();                
            }
            else {
                $this->message = 'error';
            }
        } else {
            $this->ar_title = '';
            $this->ar_content = '';

            $art = new Articles();
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
