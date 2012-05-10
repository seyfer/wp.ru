<?php /* Smarty version Smarty-3.1.8, created on 2012-05-10 13:04:37
         compiled from "Z:\home\wp.ru\www\theme\default_sm\template\V_Main_Menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315764fa3a2e71b69a3-49139806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d9a8af7a60dd31cb05c86d759ee51e936b1cfb1' => 
    array (
      0 => 'Z:\\home\\wp.ru\\www\\theme\\default_sm\\template\\V_Main_Menu.tpl',
      1 => 1336626263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315764fa3a2e71b69a3-49139806',
  'function' => 
  array (
  ),
  'cache_lifetime' => 60,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa3a2e724efc2_61679524',
  'variables' => 
  array (
    'menu' => 0,
    'item' => 0,
    'logined' => 0,
    'menu_active' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa3a2e724efc2_61679524')) {function content_4fa3a2e724efc2_61679524($_smarty_tpl) {?>

<div class="menu">
    <?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['show_m']){?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['link']=='C_User_Auth'){?>
                    <?php if ($_smarty_tpl->tpl_vars['logined']->value==null){?>
                        <a href="?c=<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" class="
                           <?php if ($_smarty_tpl->tpl_vars['item']->value['sort']==$_smarty_tpl->tpl_vars['menu_active']->value){?>
                               active
                           <?php }?>
                           "><?php echo $_smarty_tpl->tpl_vars['item']->value['ancor'];?>
</a>
                    <?php }?>

                <?php }else{ ?>
                    <a href="?c=<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" class="
                       <?php if ($_smarty_tpl->tpl_vars['item']->value['sort']==$_smarty_tpl->tpl_vars['menu_active']->value){?>
                           active
                       <?php }?>
                       "><?php echo $_smarty_tpl->tpl_vars['item']->value['ancor'];?>
</a>
                <?php }?>
            <?php }?>
        <?php } ?>
    <?php }?>
</div>
<?php }} ?>