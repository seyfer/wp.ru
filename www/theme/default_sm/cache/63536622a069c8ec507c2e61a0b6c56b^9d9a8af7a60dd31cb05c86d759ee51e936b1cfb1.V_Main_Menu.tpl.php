<?php /*%%SmartyHeaderCode:315764fa3a2e71b69a3-49139806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d9a8af7a60dd31cb05c86d759ee51e936b1cfb1' => 
    array (
      0 => 'Z:\\home\\wp.ru\\www\\theme\\default_sm\\template\\V_Main_Menu.tpl',
      1 => 1336124501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315764fa3a2e71b69a3-49139806',
  'cache_lifetime' => 60,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa3a4562cf5d0_00073223',
  'variables' => 
  array (
    'menu' => 0,
    'item' => 0,
    'logined' => 0,
    'menu_active' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa3a4562cf5d0_00073223')) {function content_4fa3a4562cf5d0_00073223($_smarty_tpl) {?>
<div class="menu">
                        
            <a href="?c=C_Index" class="
                                  active
                              ">Главная</a>
                    
            <a href="?c=C_Editor" class="
                              ">Консоль редактора</a>
                                                
            <a href="?c=C_User_Auth" class="
                              ">Авторизация</a>
            </div>
<?php }} ?>