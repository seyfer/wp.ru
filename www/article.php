<?

include_once('models/startup.php');
include_once('models/article.php');

// ��������� ����������, ����������� � ��, ������ ������.
startup();

$article = articles_get($_GET['id']);
$title = '������ - ' . $article['title'];

// ���������.
header('Content-type: text/html; charset=windows-1251');

// ����� � ������.
//include('theme/default/v_article.php');

$content = view_include('v_article.php', array('article' => $article,
    'site_theme' => $site_theme));

echo view_include('v_main.php', array('content' => $content,
    'title' => $title,
    'site_theme' => $site_theme));
?>