<?php /*%%SmartyHeaderCode:304314f9f96d6ae1fb9-90050475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7a6f62d36ab12d74c691c0c83a43e6b14437ede' => 
    array (
      0 => 'Z:\\home\\wp.ru\\www\\theme\\default_sm\\template\\V_Main.tpl',
      1 => 1335856816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304314f9f96d6ae1fb9-90050475',
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9facba52e465_86871514',
  'has_nocache_code' => false,
  'cache_lifetime' => 60,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9facba52e465_86871514')) {function content_4f9facba52e465_86871514($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Веб Гуру::Редактор меню</title>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
        <link rel="stylesheet" type="text/css" media="screen"
              href="theme/default_sm/template/style.css" />
    </head>
    <body>
        <div class="main">
            <div id="logo">
                <a href="http://wp.ru/">
                    <img src="
                         theme/default_sm/template/wg.png" />
                </a>
            </div>

            <div class="menu">
                <div class="menu">
                        <a href="?c=C_Index" class="
                              ">Главная</a>
                    <a href="?c=C_Editor" class="
                                  active
                              ">Консоль редактора</a>
            </div>

            </div>

            <div class="content">
                                <p>
    <a href="?c=C_Editor">Статьи</a>
    <a href="?c=C_Menu_Editor">Меню</a>
</p>
<hr>

<form name="menu_editor" method="post" action="?c=C_Menu_Editor">
    <ul>
                    <li class="editor_menu">
                <table>
                    <tr>
                        <td>Название:<input type="text" value="Главная" name="ancor"></td>
                        <td>Ссылка:<input type="text" value="C_Index" name="link"></td>
                        <td>Сортировка:<input type="text" value="1" name="sort"></td>
                        <td><a href="?c=C_Menu_Editor&up=1">+</a></td>
                        <td> <a href="?c=C_Menu_Editor&down=1">-</a></td>
                    </tr>
                </table>
            </li>
                    <li class="editor_menu">
                <table>
                    <tr>
                        <td>Название:<input type="text" value="Консоль редактора" name="ancor"></td>
                        <td>Ссылка:<input type="text" value="C_Editor" name="link"></td>
                        <td>Сортировка:<input type="text" value="2" name="sort"></td>
                        <td><a href="?c=C_Menu_Editor&up=2">+</a></td>
                        <td> <a href="?c=C_Menu_Editor&down=2">-</a></td>
                    </tr>
                </table>
            </li>
            </ul>
    <input type="submit" name="save_menu" value="Сохранить">
</form>
            </div>
        </div>


        <p id="copyright"><a href=http://wp.ru/>
                cms.me
            </a> &copy;</p>

    </body>
</html><?php }} ?>