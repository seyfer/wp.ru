<?php /* Smarty version Smarty-3.1.8, created on 2012-04-23 07:45:42
         compiled from "Z:/home/wp.ru/www/theme/default_sm/template\V_Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:325304f94d066ebbe88-36223094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95c715931ba098c9c3fe8c4c18b28e6983be49a6' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\V_Main.tpl',
      1 => 1335152110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325304f94d066ebbe88-36223094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'site_theme' => 0,
    'site_root_path' => 0,
    'message' => 0,
    'content' => 0,
    'site_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f94d0670259b4_11405636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f94d0670259b4_11405636')) {function content_4f94d0670259b4_11405636($_smarty_tpl) {?><<?php ?>? /*
  Шаблон главной страницы
  =======================
  $title - заголовок
  $content - содержание
  $site_theme - текущая тема
 */ ?<?php ?>>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">	
        <link rel="stylesheet" type="text/css" media="screen" 
              href="theme/<?php echo $_smarty_tpl->tpl_vars['site_theme']->value;?>
/template/style.css" /> 
    </head>
    <body>
        <div class="main">
            <div id="logo">
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
">
                    <img src="
                         theme/<?php echo $_smarty_tpl->tpl_vars['site_theme']->value;?>
/template/wg.png" />
                </a>
            </div>

            <div class="menu">
                <a href="index.php?c=C_Index">Главная</a> |
                <a href="index.php?c=C_Editor">Консоль редактора</a>
            </div>
            <div class="content">
                <?php if ($_smarty_tpl->tpl_vars['message']->value){?>
                    <h1><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        </div>


        <p id="copyright"><a href=<?php echo $_smarty_tpl->tpl_vars['site_root_path']->value;?>
>
                <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>

            </a> &copy;</p>

    </body>
</html>
<?php }} ?>