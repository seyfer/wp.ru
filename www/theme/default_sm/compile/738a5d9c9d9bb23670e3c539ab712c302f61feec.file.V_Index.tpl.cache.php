<?php /* Smarty version Smarty-3.1.8, created on 2012-05-04 17:35:35
         compiled from "Z:/home/wp.ru/www/theme/default_sm/template\Article\V_Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62034fa3a2e709deb2-54789133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '738a5d9c9d9bb23670e3c539ab712c302f61feec' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\Article\\V_Index.tpl',
      1 => 1336030336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62034fa3a2e709deb2-54789133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
    'intros' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa3a2e7173975_20668481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa3a2e7173975_20668481')) {function content_4fa3a2e7173975_20668481($_smarty_tpl) {?>

<ul>   
    <?php if ($_smarty_tpl->tpl_vars['articles']->value){?>
        <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
            <li>
                <a href="index.php?c=C_Article&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id_article'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

                </a>
                <p>                   
                    <?php echo $_smarty_tpl->tpl_vars['intros']->value[$_smarty_tpl->tpl_vars['article']->value['id_article']];?>

                </p>
            </li>
        <?php } ?>
    <?php }?>
</ul><?php }} ?>