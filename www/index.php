<?include_once('models/startup.php');include_once('models/article.php');// запуск сессии.startup();$articles = articles_all();$intros = articles_intro($articles);$title = "Главная";$content = view_include('v_index.php',         array(            'articles' => $articles,            'intros' => $intros,            'site_theme' => $site_theme            ));echo view_include('v_main.php',         array(            'content' => $content,            'title' => $title,            'site_theme' => $site_theme,            'site_root_path' => $site_root_path            ));?>