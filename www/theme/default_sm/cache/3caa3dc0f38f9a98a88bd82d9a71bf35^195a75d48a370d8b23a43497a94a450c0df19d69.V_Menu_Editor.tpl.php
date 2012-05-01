<?php /*%%SmartyHeaderCode:11374f9fa83bb62943-65193575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '195a75d48a370d8b23a43497a94a450c0df19d69' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\Menu\\V_Menu_Editor.tpl',
      1 => 1335864486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11374f9fa83bb62943-65193575',
  'cache_lifetime' => 60,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9faca895f494_11355432',
  'variables' => 
  array (
    'menu' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9faca895f494_11355432')) {function content_4f9faca895f494_11355432($_smarty_tpl) {?>
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
</form><?php }} ?>