<?php /* Smarty version Smarty-3.1.8, created on 2012-05-04 17:35:23
         compiled from "Z:/home/wp.ru/www/theme/default_sm/template\Article\V_Editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79914fa3a2dbc28319-35822815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31bafea0fb88442f492fe44402e8ae1ddd0aaebd' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\Article\\V_Editor.tpl',
      1 => 1336030336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79914fa3a2dbc28319-35822815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa3a2dbca4325_29532095',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa3a2dbca4325_29532095')) {function content_4fa3a2dbca4325_29532095($_smarty_tpl) {?>

 <p>
     <a href="?c=C_Editor">Статьи</a>
     <a href="?c=C_Menu_Editor">Меню</a>
 </p>
 <hr>

<ul>
    <li>
        <b><a href="index.php?c=C_New">Новая статья</a></b>
    </li>
    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
        <li>
            <a href="index.php?c=C_Edit&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id_article'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

            </a>
        </li>
    <?php } ?>
</ul>
<?php }} ?>