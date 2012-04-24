<?php /* Smarty version Smarty-3.1.8, created on 2012-04-24 05:56:27
         compiled from "Z:/home/wp.ru/www/theme/default_sm/template\Article\V_New.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285094f96084b45aac0-41460848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32bcee04f47bfb0f43331ce81012ef2e16bd4dad' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\Article\\V_New.tpl',
      1 => 1335162407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285094f96084b45aac0-41460848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f96084b4a7a82_77655644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f96084b4a7a82_77655644')) {function content_4f96084b4a7a82_77655644($_smarty_tpl) {?><<?php ?>? /*
  Шаблон главной страницы
  =======================
  $title - заголовок
  $content - содержание
 */ ?<?php ?>>


<h1>Новая статья</h1>
<form method="post">
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
    <input type="submit" value="Добавить" />
</form>

<?php }} ?>