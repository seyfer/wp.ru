<?php /* Smarty version Smarty-3.1.8, created on 2012-05-01 15:55:06
         compiled from "Z:/home/wp.ru/www/theme/default_sm/template\Article\V_Edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:306024f9f96da06b681-09609563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba7851531096023603d459e1b43aaf23684c4a9a' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\Article\\V_Edit.tpl',
      1 => 1335235174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306024f9f96da06b681-09609563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_article' => 0,
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9f96da0d8bd5_41354704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9f96da0d8bd5_41354704')) {function content_4f9f96da0d8bd5_41354704($_smarty_tpl) {?><<?php ?>? /*
Шаблон главной страницы
=======================
$title - заголовок
$content - содержание
*/ ?<?php ?>>

<form method="post" action="index.php?c=C_Edit&id=<?php echo $_smarty_tpl->tpl_vars['id_article']->value;?>
">
    Название:
    <br/>
    <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
    <br/>
    <br/>
    Содержание:
    <br/>
    <textarea name="content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea>
    <br/>
    <input type="hidden" name="id_article" value="<?php echo $_smarty_tpl->tpl_vars['id_article']->value;?>
" />
    <input type="submit" name ="edit" value="Применить" />
    <input type="submit" name ="delete" value="Удалить" style="margin-left: 40px;"/>
</form>

<?php }} ?>