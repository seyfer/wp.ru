<?

include_once('models/startup.php');
include_once('models/article.php');

// Установка параметров, подключение к БД, запуск сессии.
startup();

$article = articles_get($_GET['id']);
$title = 'Статья - ' . $article['title'];

$content = view_include('v_article.php', 
        array(
            'article' => $article,
            'site_theme' => $site_theme
            ));

echo view_include('v_main.php', 
        array(
            'content' => $content,
            'title' => $title,
            'site_theme' => $site_theme,
            'site_root_path' => $site_root_path
            ));


?>