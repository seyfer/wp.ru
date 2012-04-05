<?

include_once('models/startup.php');
include_once('models/article.php');

// Установка параметров, подключение к БД, запуск сессии.
startup();

$article = articles_get($_GET['id']);
$title = 'Статья - ' . $article['title'];

// Кодировка.
header('Content-type: text/html; charset=windows-1251');

// Вывод в шаблон.
//include('theme/default/v_article.php');

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

mysql_close();
?>