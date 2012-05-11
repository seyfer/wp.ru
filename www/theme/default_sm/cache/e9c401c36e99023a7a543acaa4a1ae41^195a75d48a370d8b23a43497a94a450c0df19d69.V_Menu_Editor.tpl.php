<?php /*%%SmartyHeaderCode:229204fab44162b1007-17723912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '195a75d48a370d8b23a43497a94a450c0df19d69' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\Menu\\V_Menu_Editor.tpl',
      1 => 1336626000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229204fab44162b1007-17723912',
  'cache_lifetime' => 60,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fac8cc226f618_94512834',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fac8cc226f618_94512834')) {function content_4fac8cc226f618_94512834($_smarty_tpl) {?>
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
</form><?php }} ?>