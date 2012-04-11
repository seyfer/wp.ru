<?

include_once('models/startup.php');
include_once('models/article.php');

$base = new Base();
// запуск сессии.
$base->startup();

$art = new Articles();

$article = $art->articles_get($_GET['id']);
$title = 'Статья - ' . $article['title'];

$content = $base->view_include('v_article.php', 
        array(
            'article' => $article,
            'site_theme' => $site_theme
            ));

echo $base->view_include('v_main.php', 
        array(
            'content' => $content,
            'title' => $title,
            'site_theme' => $site_theme,
            'site_root_path' => $site_root_path
            ));


?>