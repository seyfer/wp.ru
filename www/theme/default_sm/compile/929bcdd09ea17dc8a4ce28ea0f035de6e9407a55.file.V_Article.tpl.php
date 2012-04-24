<?php /* Smarty version Smarty-3.1.8, created on 2012-04-24 06:58:08
         compiled from "Z:/home/wp.ru/www/theme/default_sm/template\Article\V_Article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:324414f9616c0c897a2-88369588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '929bcdd09ea17dc8a4ce28ea0f035de6e9407a55' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\Article\\V_Article.tpl',
      1 => 1335161577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324414f9616c0c897a2-88369588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9616c0d0fa21_86451357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9616c0d0fa21_86451357')) {function content_4f9616c0d0fa21_86451357($_smarty_tpl) {?><<?php ?>? /*
  Шаблон одной статьи
  =======================
  $article - массив статьи

  статья:
  id_article - идентификатор
  title - заголвок
  content - текст
 */ ?<?php ?>>
 
<ul>	
   
    <?php if ($_GET['id']){?>
        <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h3>
        <br>
        <p>
            <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

        </p>                    
    <?php }?>

</ul><?php }} ?>