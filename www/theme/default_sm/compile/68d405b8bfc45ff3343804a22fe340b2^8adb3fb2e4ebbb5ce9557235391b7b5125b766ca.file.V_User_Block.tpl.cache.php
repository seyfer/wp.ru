<?php /* Smarty version Smarty-3.1.8, created on 2012-05-04 17:35:39
         compiled from "Z:\home\wp.ru\www\theme\default_sm\template\User\V_User_Block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150854fa3a2eb8e4f63-56899506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8adb3fb2e4ebbb5ce9557235391b7b5125b766ca' => 
    array (
      0 => 'Z:\\home\\wp.ru\\www\\theme\\default_sm\\template\\User\\V_User_Block.tpl',
      1 => 1336122543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150854fa3a2eb8e4f63-56899506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logined' => 0,
    'user_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa3a2eb945bf7_28315097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa3a2eb945bf7_28315097')) {function content_4fa3a2eb945bf7_28315097($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['logined']->value){?>
    <div id="user_block">
        Вы вошли как <b><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</b>, <a href="index.php?c=C_User_Auth">выйти</a>
    </div>
<?php }else{ ?>
    <div id="user_block">Вы неавторизованы, <a href="index.php?c=C_User_Auth">войти</a>
    </div>
<?php }?><?php }} ?>