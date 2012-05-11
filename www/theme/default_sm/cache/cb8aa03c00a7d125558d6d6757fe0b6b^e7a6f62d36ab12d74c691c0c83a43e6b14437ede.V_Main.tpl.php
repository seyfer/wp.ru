<?php /*%%SmartyHeaderCode:75744fa3a2e7312fa7-34257762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7a6f62d36ab12d74c691c0c83a43e6b14437ede' => 
    array (
      0 => 'Z:\\home\\wp.ru\\www\\theme\\default_sm\\template\\V_Main.tpl',
      1 => 1336123168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75744fa3a2e7312fa7-34257762',
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fac8cc2308309_66086322',
  'has_nocache_code' => false,
  'cache_lifetime' => 60,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fac8cc2308309_66086322')) {function content_4fac8cc2308309_66086322($_smarty_tpl) {?>
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

             <div class ="user_block">
                        <div id="user_block">
        Вы вошли как <b>seyfer seed</b>, <a href="index.php?c=C_User_Auth">выйти</a>
    </div>

                </div>

            <div class="content">
                                <p>
    <a href="?c=C_Editor">Статьи</a>
    <a href="?c=C_Menu_Editor">Меню</a>
</p>
<hr>

<form name="menu_add" method="post" action="?c=C_Menu_Editor">
    <div class="editor_menu">
        Название: <input type="text" value="" name="ancor">
        Ссылка: <input type="text" value="" name="link">
        <input type="submit" value="Добавить" name="add_menu">
    </div>
</form>
<br><hr>
<p>Чекбокс означает показывать меню или нет.</p>

<form name="menu_editor" method="post" action="?c=C_Menu_Editor">
    <ul>
                    <li class="editor_menu">
                Название:   <input type="text" value="Главная" name="input1[ancor]">
                Ссылка:     <input class="mlink" type="text" value="C_Index" name="input1[link]">
                Сортировка: <input class="msort" type="text" value="1" name="input1[sort]">
                <input type="checkbox" name = "input1[show_m]"
                                                  checked="true"
                                              >
                <a href="?c=C_Menu_Editor&up=1">+</a>
                <a href="?c=C_Menu_Editor&down=1">-</a>
                <a href="?c=C_Menu_Editor&del=1">Delete</a>
                <input type="hidden" name="input1[id_menu]" value="1">
            </li>
                    <li class="editor_menu">
                Название:   <input type="text" value="Консоль редактора" name="input2[ancor]">
                Ссылка:     <input class="mlink" type="text" value="C_Editor" name="input2[link]">
                Сортировка: <input class="msort" type="text" value="2" name="input2[sort]">
                <input type="checkbox" name = "input2[show_m]"
                                                  checked="true"
                                              >
                <a href="?c=C_Menu_Editor&up=2">+</a>
                <a href="?c=C_Menu_Editor&down=2">-</a>
                <a href="?c=C_Menu_Editor&del=2">Delete</a>
                <input type="hidden" name="input2[id_menu]" value="2">
            </li>
                    <li class="editor_menu">
                Название:   <input type="text" value="Авторизация" name="input6[ancor]">
                Ссылка:     <input class="mlink" type="text" value="C_User_Auth" name="input6[link]">
                Сортировка: <input class="msort" type="text" value="3" name="input6[sort]">
                <input type="checkbox" name = "input6[show_m]"
                                              >
                <a href="?c=C_Menu_Editor&up=6">+</a>
                <a href="?c=C_Menu_Editor&down=6">-</a>
                <a href="?c=C_Menu_Editor&del=6">Delete</a>
                <input type="hidden" name="input6[id_menu]" value="6">
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