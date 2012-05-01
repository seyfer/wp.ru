<?php /* Smarty version Smarty-3.1.8, created on 2012-05-01 17:17:16
         compiled from "Z:\home\wp.ru\www\theme\default_sm\template\V_Main_Menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57354f9faa1c02cc32-74095145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d9a8af7a60dd31cb05c86d759ee51e936b1cfb1' => 
    array (
      0 => 'Z:\\home\\wp.ru\\www\\theme\\default_sm\\template\\V_Main_Menu.tpl',
      1 => 1335857893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57354f9faa1c02cc32-74095145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'item' => 0,
    'menu_active' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9faa1c156418_87331124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9faa1c156418_87331124')) {function content_4f9faa1c156418_87331124($_smarty_tpl) {?>

<div class="menu">
    <?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <a href="?c=<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" class="
               <?php if ($_smarty_tpl->tpl_vars['item']->value['sort']==$_smarty_tpl->tpl_vars['menu_active']->value){?>
                   active
               <?php }?>
               "><?php echo $_smarty_tpl->tpl_vars['item']->value['ancor'];?>
</a>
        <?php } ?>
    <?php }?>
</div>
<?php }} ?>