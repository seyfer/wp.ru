<?php /* Smarty version Smarty-3.1.8, created on 2012-04-23 09:30:35
         compiled from "Z:/home/wp.ru/www/theme/default_sm/template\V_Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133674f94e8fbb12f47-40005146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a3d9340cd4429cad5479681755033d821985177' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\V_Index.tpl',
      1 => 1335158603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133674f94e8fbb12f47-40005146',
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
  'unifunc' => 'content_4f94e8fbbd7221_37619280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f94e8fbbd7221_37619280')) {function content_4f94e8fbbd7221_37619280($_smarty_tpl) {?>

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