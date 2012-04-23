<?php /* Smarty version Smarty-3.1.8, created on 2012-04-23 11:50:48
         compiled from "Z:/home/wp.ru/www/theme/default_sm/template\Article\V_Edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:215964f9509d8837630-78164324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba7851531096023603d459e1b43aaf23684c4a9a' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\Article\\V_Edit.tpl',
      1 => 1335163251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215964f9509d8837630-78164324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'success' => 0,
    'id_article' => 0,
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9509d88cef49_25785237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9509d88cef49_25785237')) {function content_4f9509d88cef49_25785237($_smarty_tpl) {?><<?php ?>? /*
Шаблон главной страницы
=======================
$title - заголовок
$content - содержание
*/ ?<?php ?>>


<h1>Редактировать статью</h1>

<?php if ($_smarty_tpl->tpl_vars['success']->value){?>
    <b>Успешно обновлена</b>
<?php }?>

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