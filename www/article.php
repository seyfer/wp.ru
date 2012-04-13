<?

include_once('models/m_startup.php');
include_once('models/m_article.php');

$base = new Base();
// запуск сессии.
$base->startup();

$art = new Articles();

$article = $art->articles_get($_GET['id']);
$title = 'Статья - ' . $article['title'];

$content = $base->view_include('v_article.php', 
        array(
            'article' => $article            
            ));

echo $base->view_include('v_main.php', 
        array(
            'content' => $content,
            'title' => $title,
            'site_theme' => $base->site_theme,
            'site_root_path' => $base->site_root_path
            ));


?>