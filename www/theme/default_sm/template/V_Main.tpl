{*
Шаблон главной страницы
=======================
$title - заголовок
$content - содержание
$site_theme - текущая тема
*}
{*debug*}
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>{$title}</title>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
        <link rel="stylesheet" type="text/css" media="screen"
              href="theme/{$site_theme}/template/style.css" />
    </head>
    <body>
        <div class="main">
            <div id="logo">
                <a href="{$site_root_path}">
                    <img src="
                         theme/{$site_theme}/template/wg.png" />
                </a>
            </div>

            <div class="menu">
                {$menu}
            </div>

            <div class="content">
                {if $message}
                    <h1>{$message}</h1>
                {/if}
                {$content}
            </div>
        </div>


        <p id="copyright"><a href={$site_root_path}>
                {$site_name}
            </a> &copy;</p>

    </body>
</html>