<?php /* Smarty version Smarty-3.1.8, created on 2012-04-24 05:56:14
         compiled from "Z:\home\wp.ru\www\theme\default_sm\template\V_Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210254f96083e664426-80741595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7a6f62d36ab12d74c691c0c83a43e6b14437ede' => 
    array (
      0 => 'Z:\\home\\wp.ru\\www\\theme\\default_sm\\template\\V_Main.tpl',
      1 => 1335159931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210254f96083e664426-80741595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'site_theme' => 0,
    'site_root_path' => 0,
    'message' => 0,
    'content' => 0,
    'site_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f96083e71be66_50907789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f96083e71be66_50907789')) {function content_4f96083e71be66_50907789($_smarty_tpl) {?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
</html><?php }} ?>