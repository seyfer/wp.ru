<?php

/**
 * Description of C_Article
 *
 * @author Admin
 */
require_once '/control/C_Base.php';

class C_Article extends C_Base {  
    
    private $article;
    private $message;

    function __construct($site_theme) {
        parent::__construct($site_theme);
    }
    
    function OnInput() {
        parent::OnInput();
        
        if ($this->IsGet()) {
            $id = $_GET['id'];
            
            $art = new M_Articles();
            
            if ($this->article = $art->articles_get($id)) {
                $this->title = $this->title . $this->article['title'];
            }
            else {
                $this->message = "статьи с таким ид не существует";
            }
        }
        else {
            $this->message = "не получен ид статьи";
        }
        
    }
   
    function OnOutput() {
        
        $this->content = parent::view_include('v_article.php', array (            
            'article' => $this->article,
            'message' => $this->message
        ));
        
        parent::OnOutput();
    }
    
}

?>
