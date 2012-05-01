<?php /* Smarty version Smarty-3.1.8, created on 2012-05-01 17:28:08
         compiled from "Z:/home/wp.ru/www/theme/default_sm/template\Menu\V_Menu_Editor.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9fa83bc16b91_44263074',
  'variables' => 
  array (
    'menu' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9fa83bc16b91_44263074')) {function content_4f9fa83bc16b91_44263074($_smarty_tpl) {?>

<p>
    <a href="?c=C_Editor">Статьи</a>
    <a href="?c=C_Menu_Editor">Меню</a>
</p>
<hr>

<form name="menu_editor" method="post" action="?c=C_Menu_Editor">
    <ul>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li class="editor_menu">
                Название:<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ancor'];?>
" name="ancor">
                Ссылка:<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" name="link">
                Сортировка:<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['sort'];?>
" name="sort">
                <a href="?c=C_Menu_Editor&up=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_menu'];?>
">+</a>
                <a href="?c=C_Menu_Editor&down=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_menu'];?>
">-</a>
            </li>
        <?php } ?>
    </ul>
    <input type="submit" name="save_menu" value="Сохранить">
</form><?php }} ?>