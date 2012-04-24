<?php /* Smarty version Smarty-3.1.8, created on 2012-04-24 06:10:00
         compiled from "Z:/home/wp.ru/www/theme/default_sm/template\Article\V_Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124484f960b78f2e615-22601360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '738a5d9c9d9bb23670e3c539ab712c302f61feec' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\Article\\V_Index.tpl',
      1 => 1335155589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124484f960b78f2e615-22601360',
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
  'unifunc' => 'content_4f960b790b0fc3_54199271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f960b790b0fc3_54199271')) {function content_4f960b790b0fc3_54199271($_smarty_tpl) {?>

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