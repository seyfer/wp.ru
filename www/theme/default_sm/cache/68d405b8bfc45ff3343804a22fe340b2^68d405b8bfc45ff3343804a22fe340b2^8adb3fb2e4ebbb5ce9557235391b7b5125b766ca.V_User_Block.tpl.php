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
  'variables' => 
  array (
    'logined' => 0,
    'user_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa3a2eb960ef0_36624970',
  'cache_lifetime' => 60,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa3a2eb960ef0_36624970')) {function content_4fa3a2eb960ef0_36624970($_smarty_tpl) {?>
    <div id="user_block">Вы неавторизованы, <a href="index.php?c=C_User_Auth">войти</a>
    </div>
<?php }} ?>