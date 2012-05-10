<?php /* Smarty version Smarty-3.1.8, created on 2012-05-10 13:00:04
         compiled from "Z:/home/wp.ru/www/theme/default_sm/template\Menu\V_Menu_Editor.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'cache_lifetime' => 60,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fab441646fc15_22157359',
  'variables' => 
  array (
    'menu' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fab441646fc15_22157359')) {function content_4fab441646fc15_22157359($_smarty_tpl) {?>

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
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li class="editor_menu">
                Название:   <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ancor'];?>
" name="input<?php echo $_smarty_tpl->tpl_vars['item']->value['id_menu'];?>
[ancor]">
                Ссылка:     <input class="mlink" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" name="input<?php echo $_smarty_tpl->tpl_vars['item']->value['id_menu'];?>
[link]">
                Сортировка: <input class="msort" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['sort'];?>
" name="input<?php echo $_smarty_tpl->tpl_vars['item']->value['id_menu'];?>
[sort]">
                <input type="checkbox" name = "input<?php echo $_smarty_tpl->tpl_vars['item']->value['id_menu'];?>
[show_m]"
                       <?php if ($_smarty_tpl->tpl_vars['item']->value['show_m']){?>
                           checked="true"
                       <?php }?>
                       >
                <a href="?c=C_Menu_Editor&up=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_menu'];?>
">+</a>
                <a href="?c=C_Menu_Editor&down=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_menu'];?>
">-</a>
                <a href="?c=C_Menu_Editor&del=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_menu'];?>
">Delete</a>
                <input type="hidden" name="input<?php echo $_smarty_tpl->tpl_vars['item']->value['id_menu'];?>
[id_menu]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_menu'];?>
">
            </li>
        <?php } ?>
    </ul>
    <input type="submit" name="save_menu" value="Сохранить">
</form><?php }} ?>