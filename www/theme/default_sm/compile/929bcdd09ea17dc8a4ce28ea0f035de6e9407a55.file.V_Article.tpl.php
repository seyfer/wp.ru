<?php /* Smarty version Smarty-3.1.8, created on 2012-05-01 15:54:22
         compiled from "Z:/home/wp.ru/www/theme/default_sm/template\Article\V_Article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144214f9f96aeeb2583-68962501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '144214f9f96aeeb2583-68962501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9f96af03cfc2_56100980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9f96af03cfc2_56100980')) {function content_4f9f96af03cfc2_56100980($_smarty_tpl) {?><<?php ?>? /*
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