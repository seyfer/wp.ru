<?php /* Smarty version Smarty-3.1.8, created on 2012-04-23 10:19:59
         compiled from "Z:/home/wp.ru/www/theme/default_sm/template\Article\V_Editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47234f94f48f20ac15-14848316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31bafea0fb88442f492fe44402e8ae1ddd0aaebd' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\Article\\V_Editor.tpl',
      1 => 1335161724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47234f94f48f20ac15-14848316',
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
  'unifunc' => 'content_4f94f48f28dcf2_23620823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f94f48f28dcf2_23620823')) {function content_4f94f48f28dcf2_23620823($_smarty_tpl) {?><<?php ?>? /*
  Шаблон главной страницы
  =======================
  $articles - список статей

  статья:
  id_article - идентификатор
  title - заголвок
  content - текст
 */ ?<?php ?>>


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