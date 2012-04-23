<?php

/**
 * Description of C_Article
 *
 * @author Admin
 */
require_once '/control/C_Base.php';

class C_Article extends C_Base {  
    
    private $article;
    
    function __construct() {
        parent::__construct();
    }
    
    function OnInput() {
        parent::OnInput();
        
        if ($this->IsGet()) {
            $this->id_article = $_GET['id'];
            
            $art = M_Articles::Instance();
            
            if ($this->article = $art->get($this->id_article)) {
                //вернулся массив результатов
                $this->article = $this->article[0];
                $this->page_title .= $this->article['title'];
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
        
        $smarty = M_Smarty::getInstance();
        
        $this->tpl_path .= $this->article_tpl_path;
        
        $vars = array (
            'article' => $this->article
        );
        $smarty->assign($vars);
        
        $this->content = $smarty->fetch($this->tpl_path . 'V_Article.tpl');
      
        parent::OnOutput();
    }
    
}

?>
